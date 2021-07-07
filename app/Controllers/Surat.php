<?php

namespace App\Controllers;

use App\Models\Surat_model;
use App\Models\Users_model;

class Surat extends BaseController
{
	protected $Users_model;
	protected $Acc_surat_model;

	public function __construct()
	{
		$this->Surat_model = new Surat_model;
		$this->Users_model = new Users_model;
	}

	public function index()
	{

		$surat_belum_ttd = $this->Surat_model->where('status', 1)->findAll();

		$data = [
			'surat' => $this->Surat_model->getSurat(),
			'count_surat_belum_ttd' => count($surat_belum_ttd)
		];

		return view('kepala/surat/home', $data);
	}

	//Proses Edit Data
	//Edit Data
	public function tanda_tangan($id)
	{
		$this->Surat_model->update($id, [
			'status' => 2
		]);

		session()->setFlashdata('pesan', 'Berkas berhasil ditandatangani!');

		return redirect()->to('/surat');
	}

	//Download Data
	public function download($id)
	{
		$surat = $this->Surat_model->getSurat($id);

		return $this->response->download('upload/' . $surat['surat'], null);
	}

	//Notifikasi
	public function get_tot()
	{
		$surat_belum_ttd = $this->Surat_model->where('status', 1)->findAll();

		$tot = count($surat_belum_ttd);
		$result['tot'] = $tot;
		$result['msg'] = "Berhasil direfresh secara realtime";
		echo json_encode($result);
	}
}
