<?php

namespace App\Controllers;

use App\Models\Role_model;

class Role extends BaseController
{
	protected $Role_model;

	public function __construct()
	{
		$this->Role_model = new Role_model;
	}

	public function index()
	{

		$data = [
			'role' => $this->Role_model->getRole()
		];

		return view('su/role/home', $data);
	}

	//Tambah Data
	public function add_data()
	{

		$role = $this->Role_model->findAll();
		$data = [
			'role' => $role
		];

		return view('su/role/add_data', $data);
	}

	//Proses Tambah Data
	//Tambah Data
	public function proses_tambah_data()
	{
		$this->Role_model->save([
			'role' => $this->request->getVar('role'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

		return redirect()->to('/role');
	}

	//Edit Data
	public function edit_data($id)
	{
		$data = [
			'role' => $this->Role_model->getRole($id)
		];

		return view('su/role/edit_data', $data);
	}

	//Proses Edit Data
	//Edit Data
	public function proses_edit_data($id)
	{
		$this->Role_model->update($id, [
			'role' => $this->request->getVar('role'),
		]);

		session()->setFlashdata('pesan', 'Data berhasil diubah!');

		return redirect()->to('/role');
	}

	//Hapus Data
	public function delete($id)
	{
		$this->Role_model->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus!');
		return redirect()->to('/role');
	}
}
