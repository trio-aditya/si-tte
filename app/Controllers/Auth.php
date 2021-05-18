<?php

namespace App\Controllers;

use App\Models\Auth_model;

class Auth extends BaseController
{
    public function index()
    {
        return view('auth/login');
    }

    public function proses_login()
    {

        $muser = new Auth_model();

        $username = $this->request->getPost('username');
        // $password = get_hash($this->request->getPost('password'), PASSWORD_DEFAULT, $option);
        $password = $this->request->getPost('password');

        $cek = $muser->get_data($username);

        if (($cek['username'] == $username)) {

            if (password_verify($password, $cek['password'])) {
                session()->set('id_user', $cek['id_user']);
                session()->set('username', $cek['username']);
                session()->set('password', $cek['password']);
                session()->set('role_id', $cek['role_id']);
                session()->set('nama_lengkap', $cek['nama_lengkap']);
                session()->set('nip', $cek['nip']);
                session()->set('golongan', $cek['golongan']);
                session()->set('foto', $cek['foto']);

                session()->set('login', true);

                return redirect()->to(base_url('home'));
            } else {
                session()->setFlashdata('gagal', 'Password salah!');
                return redirect()->to(base_url('auth'));
            }
        } else {
            session()->setFlashdata('gagal', 'Username salah!');
            return redirect()->to(base_url('auth'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return view('auth/login');
    }
}
