<?php

namespace App\Controllers;

use App\Models\Users_model;
use App\Models\Surat_model;

class Home extends BaseController
{

	protected $Users_model;
	protected $Surat_model;

	public function __construct()
	{
		$this->Users_model = new Users_model;
		$this->Surat_model = new Surat_model;
	}


	public function index()
	{
		$users = $this->Users_model->getUsers();
		$surat = $this->Surat_model->getSurat();
		$surat_belum_ttd = $this->Surat_model->where('status', 1)->findAll();
		$surat_ttd = $this->Surat_model->where('status', 2)->findAll();
		// $surat_belum_ttd = $this->Surat_model->getSuratBelumTTD();
		// $surat_ttd = $this->Surat_model->getSuratTTD();




		$data = [
			'count_users' => count($users),
			'count_surat' => count($surat),
			'count_surat_belum_ttd' => count($surat_belum_ttd),
			'count_surat_ttd' => count($surat_ttd)
		];

		return view('home', $data);
	}
}
