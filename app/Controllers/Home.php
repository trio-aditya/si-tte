<?php

namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
		if (empty(session()->get('username'))) {
			return redirect()->to('/auth');
		}
	}


	public function index()
	{
		return view('home');
	}

	//Cek Login
	public function cek_status()
	{
		if (session()->get('id_user') == NULL) {
			session()->setFlashdata('error_login', 'Silahkan login terlebih dahulu untuk mengakses data.');
			return redirect()->to('/auth');
		}
	}
}
