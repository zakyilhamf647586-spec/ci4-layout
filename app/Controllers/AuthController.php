<?php

namespace App\Controllers;

use CodeIgniter\I18n\Time;

class AuthController extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function login()
    {
        if ($this->request->getPost()) {
            $username = trim((string) $this->request->getPost('username'));
            $password = (string) $this->request->getPost('password');

            $dataUser = [
                'username' => 'april',
                'password' => md5('123'),
                'role'     => 'admin',
                'email'    => 'april@example.com',
            ];

            if ($username !== $dataUser['username']) {
                session()->setFlashdata('failed', 'Username Tidak Ditemukan');
                return redirect()->to(site_url('login'));
            }

            if (md5($password) !== $dataUser['password']) {
                session()->setFlashdata('failed', 'Username & Password Salah');
                return redirect()->to(site_url('login'));
            }

            session()->set([
                'username'   => $dataUser['username'],
                'role'       => $dataUser['role'],
                'email'      => $dataUser['email'],
                'login_time' => Time::now('Asia/Jakarta')->toDateTimeString(),
                'isLoggedIn' => true,
            ]);

            return redirect()->to(site_url('/'));
        }

        return view('v_login', [
            'title' => 'Login',
        ]);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(site_url('login'));
    }
}
