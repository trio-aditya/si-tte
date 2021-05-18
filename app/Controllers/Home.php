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

		$data = [
			'count_users' => count($users),
			'count_surat' => count($surat)
		];

		return view('home', $data);
	}
}
