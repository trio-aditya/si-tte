<?php

namespace App\Controllers;

use App\Models\Surat_model;
use App\Models\Users_model;

class Dokumen extends BaseController
{
	protected $Users_model;
	protected $Surat_model;

	public function __construct()
	{
		$this->Surat_model = new Surat_model;
		$this->Users_model = new Users_model;
	}

	public function index()
	{

		$data = [
			'surat' => $this->Surat_model->getSurat()
		];

		return view('kepala/dokumen/home', $data);
	}

	//Proses Edit Data
	//Edit Data
	public function tanda_tangan($id)
	{
		$this->Surat_model->update($id, [
			'status' => 2
		]);

		session()->setFlashdata('pesan', 'Berkas berhasil ditandatangani!');

		return redirect()->to('/dokumen');
	}

	//Download Data
	public function download($id)
	{
		$surat = $this->Surat_model->getSurat($id);

		return $this->response->download('upload/' . $surat['dokumen'], null);
	}
}
