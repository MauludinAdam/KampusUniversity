<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    protected $AuthModel;
    public function __construct()
    {
        helper('form');
        $this->AuthModel = new AuthModel();
    }
    public function register()
    {
        $data = [
            'judul' => 'Halaman Registrasi',
            'page'  => 'Registrasi',
        ];

        return view('auth/register', $data);
    }

    public function save_register()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Nama User',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi Dan Tidak Boleh Kosong !!!'
                ]
            ],
            'cpassword' => [
                'label' => 'Confirmasi Password',
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => '{field} Wajib diisi dan tidak boleh kosong !!!',
                    'matches' => '{field} Tidak sama'
                ]
            ],
        ])) {
            // Jika Valid
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'level' => 3,
            ];
            $this->AuthModel->save_register($data);
            session()->setFlashdata('pesan', 'registrasi berhasil !!!');

            return redirect()->to('Auth/register');
        } else {
            // Jika Tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());

            return redirect()->to(base_url('auth/register'));
        }
    }

    public function login()
    {
        $data = [
            'judul' => 'Halaman Login',
            'page'  => 'Silahkan Login',
        ];

        return view('auth/login', $data);
    }

    public function cek_login()
    {
        if ($this->validate([
            'username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi dan Tidak Boleh Kosong'
                ]
            ],
            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi dan Tidak Boleh Kosong'
                ]
            ],
        ])) {
            // Jika valid
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $cek = $this->AuthModel->login($username, $password);

            if ($cek) {
                session()->set('log', true);
                session()->set('username', $cek['username']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('foto', $cek['foto']);
                // login sukses
                return redirect()->to('home');
            } else {
                // jika login gagal

                session()->setFlashdata('pesan', 'username atau passwor tidak cocok !!!');
                return redirect()->to('auth/login');
            }
        } else {
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('auth/login');
        }
    }

    public function logout()
    {
        session()->remove('log');
        session()->remove('username');
        session()->remove('level');
        session()->remove('foto');

        session()->setFlashdata('pesan', 'Logout Sukses !!');
        return redirect()->to('auth/login');
    }
}
