<?php

namespace App\Models;

use CodeIgniter\Model;

class Upload_surat_model extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $usetTimestamps = true;
    protected $allowedFields = ['id_surat', 'surat', 'waktu_upload', 'status'];

    public function getSurat($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_surat' => $id])->first();
    }
}
