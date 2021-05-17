<?php

namespace App\Models;

use CodeIgniter\Model;

class Auth_model extends Model
{
    // public function get_data($username, $password)
    // {
    //     return $this->db->table('user')
    //         ->where(array('username' => $username, 'password' => $password))
    //         ->get()->getRowArray();
    // }
    public function get_data($username)
    {
        return $this->db->table('user')
            ->where(array('username' => $username))
            ->get()->getRowArray();
    }
}
