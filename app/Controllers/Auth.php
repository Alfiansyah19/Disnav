<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
    }
    public function login()
    {
        return view('v_login');
    }

    public function cekLogin()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'error' => [
                    'required' => '{field} Tidak Boleh Kosong',
                ]
            ]
        ])) {
            $username = $this->request->getPost('username');
            $password = sha1($this->request->getPost('password'));

            $cek = $this->ModelAuth->loginUser($username, $password);
            if ($cek) {
                // Jika Login Berhasil
                session()->set('id_user', $cek['id_user']);
                session()->set('level', $cek['level']);
                session()->set('nama_user', $cek['nama_user']);
                // session()->set('foto', $cek['foto']);
                return redirect()->to('Admin/Dashboard');
            } else {
                // Jika Gagal Login
                session()->setFlashdata('gagal', 'Username atau Password Salah!');
                return redirect()->to('Auth/login');
            }
            //Jika Valid
        } else {
            return redirect()->to('Auth/login')->withInput();
        }
    }

    public function logout()
    {
        // session()->destroy();
        session()->remove('id_user');
        session()->remove('level');
        session()->remove('nama_user');
        session()->setFlashdata('berhasil','Anda Berhasil Logout');
        return redirect()->to('Auth/login');
    }
}
