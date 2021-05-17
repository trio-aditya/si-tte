<?php

namespace App\Models;

use CodeIgniter\Model;

class Role_model extends Model
{
    protected $table = 'role';
    protected $primaryKey = 'id_role';
    protected $usetTimestamps = true;
    protected $allowedFields = ['id_role', 'role'];

    public function getRole($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id_role' => $id])->first();
    }
}
