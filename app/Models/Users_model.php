<?php

namespace App\Models;

use CodeIgniter\Model;

class Users_model extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $usetTimestamps = true;
    protected $allowedFields = ['id_user', 'username', 'password', 'status', 'masuk', 'nama_lengkap', 'nip', 'golongan', 'role_id'];

    public function getUsers($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_user' => $id])->first();
    }
}
