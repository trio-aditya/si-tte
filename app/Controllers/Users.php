<?php

namespace App\Controllers;

use App\Models\Users_model;
use App\Models\Role_model;

class Users extends BaseController
{
	protected $Users_model;
	protected $Role_model;

	public function __construct()
	{
		$this->Users_model = new Users_model;
		$this->Role_model = new Role_model;
	}

	public function index()
	{

		$data = [
			'users' => $this->Users_model->getUsers()
		];

		return view('su/users/home', $data);
	}

	//Tambah Data
	public function add_data()
	{

		$role = $this->Role_model->findAll();
		$data = [
			'role' => $role
		];

		return view('su/users/add_data', $data);
	}

	//Proses Tambah Data
	//Tambah Data
	public function proses_tambah_data()
	{
		$this->Users_model->save([
			'username' => $this->request->getPost('username'),
			'session' => base64_encode($this->request->getPost('password')),
			'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
			'nama_lengkap' => $this->request->getPost('nama_lengkap'),
			'nip' => $this->request->getPost('nip'),
			'golongan' => $this->request->getPost('golongan'),
			'role_id' => $this->request->getPost('role_id'),
			'masuk' => date('Y-m-d H:i:s'),
			'status' => 1,
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

		return redirect()->to('/users');
	}

	//Edit Data
	public function edit_data($id)
	{
		$data = [
			'users' => $this->Users_model->getUsers($id),
			'role' => $this->Role_model->findAll()
		];

		return view('su/users/edit_data', $data);
	}

	//Proses Edit Data
	//Edit Data
	public function proses_edit_data($id)
	{
		if (!empty($this->request->getPost('password'))) {
			$this->Users_model->update($id, [
				'username' => $this->request->getPost('username'),
				'session' => base64_encode($this->request->getPost('password')),
				'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'nip' => $this->request->getPost('nip'),
				'golongan' => $this->request->getPost('golongan'),
				'role_id' => $this->request->getPost('role_id'),
			]);
		} else {
			$this->Users_model->update($id, [
				'username' => $this->request->getPost('username'),
				'nama_lengkap' => $this->request->getPost('nama_lengkap'),
				'nip' => $this->request->getPost('nip'),
				'golongan' => $this->request->getPost('golongan'),
				'role_id' => $this->request->getPost('role_id'),
			]);
		}

		session()->setFlashdata('pesan', 'Data berhasil diubah!');

		return redirect()->to('/users');
	}

	//Hapus Data
	public function delete($id)
	{
		$this->Users_model->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus!');
		return redirect()->to('/users');
	}
}
