<?php

namespace App\Controllers;

use App\Models\Upload_surat_model;
use App\Models\Users_model;

class Upload_surat extends BaseController
{
	protected $Users_model;
	protected $Upload_surat_model;

	public function __construct()
	{
		$this->Upload_surat_model = new Upload_surat_model;
		$this->Users_model = new Users_model;
	}

	public function index()
	{

		$data = [
			'surat' => $this->Upload_surat_model->getSurat()
		];

		return view('operator/surat/home', $data);
	}

	//Tambah Data
	public function add_data()
	{

		$users = $this->Users_model->findAll();
		session();
		$data = [
			'users' => $users,
			'validation' => \Config\Services::validation()
		];

		return view('operator/surat/add_data', $data);
	}

	//Proses Tambah Data
	//Tambah Data
	public function proses_tambah_data()
	{
		if (!$this->validate([
			'surat' => [
				'rules' => 'uploaded[surat]|max_size[surat,2048]',
				'errors' => [
					'uploaded' => 'Pilih file surat terlebih dahulu',
					'max_size' => 'Ukuran file terlalu besar',
					'mime_in' => 'Ekstensi yang anda upload harus .pdf'
				]
			]
		])) {
			return redirect()->to('/upload_surat/add_data')->withInput();
		}

		//Ambil file
		$fileSurat = $this->request->getFile('surat');
		//Pindah file kedalam folder public/surat
		$fileSurat->move('upload');
		//Ambil nama file surat
		$namaSurat = $fileSurat->getName();

		$this->Upload_surat_model->save([
			'user_id' => $this->request->getPost('user_id'),
			'judul_dokumen' => $this->request->getVar('judul_dokumen'),
			'tanggal_dokumen' => $this->request->getVar('tanggal_dokumen'),
			'nomor_dokumen' => $this->request->getVar('nomor_dokumen'),
			'posisi_tte' => $this->request->getVar('posisi_tte'),
			'nilai_x' => $this->request->getVar('nilai_x'),
			'nilai_y' => $this->request->getVar('nilai_y'),
			'surat' => $namaSurat,
			'tampil' => $this->request->getPost('tampil'),
			'waktu_upload' => date('Y-m-d H:i:s'),
			'status' => 1,
		]);

		session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');

		return redirect()->to('/upload_surat');
	}

	//Download Data
	public function download($id)
	{
		$surat = $this->Upload_surat_model->getSurat($id);

		return $this->response->download('upload/' . $surat['surat'], null);
	}
}
