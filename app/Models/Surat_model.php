<?php

namespace App\Models;

use CodeIgniter\Model;

class Surat_model extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $usetTimestamps = true;
    protected $allowedFields = ['id_surat', 'surat', 'waktu_upload', 'status'];

    public function getSurat($id = false)
    {
        if ($id == false) {
            // $builder->orderBy('title', 'DESC');
            return $this->orderBy('id_surat', 'DESC')->findAll();
        }

        return $this->where(['id_surat' => $id])->first();
    }
}
