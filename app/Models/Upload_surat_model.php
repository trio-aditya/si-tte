<?php

namespace App\Models;

use CodeIgniter\Model;

class Upload_surat_model extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $usetTimestamps = true;
    protected $allowedFields = ['id_surat', 'judul_dokumen', 'tanggal_dokumen', 'nomor_dokumen', 'posisi_tte', 'nilai_x', 'nilai_y', 'tampil', 'surat', 'waktu_upload', 'status'];

    public function getSurat($id = false)
    {
        if ($id == false) {
            return $this->orderBy('id_surat', 'DESC')->findAll();
        }

        return $this->where(['id_surat' => $id])->first();
    }
}
