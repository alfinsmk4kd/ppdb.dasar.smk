<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelTa;
use App\Models\ModelAuth;
use App\Models\ModelPendaftaran;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->ModelAuth = new ModelAuth();
        $this->ModelTa = new ModelTa();
        $this->ModelPendaftaran = new ModelPendaftaran();
        helper('form');
    }
    public function index()
    {
        
    }
    public function loginlink()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Login',
            'ta' => $this->ModelTa->statusTa(),
            'validation' => \Config\Services::validation(),
        ];
        return view('login', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Login Admin',
        ];
        return view('v_login-admin', $data);
    }
    
    public function cek_login_user()
    {
        if ($this->validate([
                'email' => [
                    'label' => 'E-Mail',
                    'rules' => 'required|valid_email',
                    'errors'    => [
                        'required'  => '{field} Wajib Diisi !!',
                        'valid_email'  => 'Harus Format Email !!'
                    ]
                ],
                'password' => [
                    'label' => 'Password',
                    'rules' => 'required',
                    'errors'    => [
                        'required'  => '{field} Wajib Diisi',
                    ]
                ],
            ]
        )) {
            // valid
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $cek_login = $this->ModelAuth->login_user($email, $password);
            if ($cek_login) {
                session()->set('nama_user', $cek_login['nama_user']);
                session()->set('email', $cek_login['email']);
                session()->set('foto', $cek_login['foto']);
                session()->set('level', 'admin');
                return redirect()->to('admin');
            }else {
                session()->setFlashdata('pesan', 'Email atau Password Anda Salah');
                return redirect()->to('auth/login');
            }

        }else {
            // tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to('auth/login');
        }
    }
    public function logout()
    {
       session()->remove('nama-user');
       session()->remove('email');
       session()->remove('foto');
       session()->remove('level');
       session()->setFlashdata('pesan', 'Logout Success');
       return redirect()->to('auth/login');
    }

    // login pendaftar
    public function logins()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Login Siswa',
            $validation = \Config\Services::validation()
        ];
        return view('v_login-siswa', $data);
    }
    
    public function cek_login_siswa()
    {
        if ($this->validate([
                'nisn' => [
                    'label' => 'Nisn',
                    'rules' => 'required',
                    'errors'    => [
                        'required'  => '{field} Wajib Diisi !!',
                    ]
                ],
                'password' => [
                    'label' => 'Nisn atau Password',
                    'rules' => 'required',
                    'errors'    => [
                        'required'  => '{field} Wajib Diisi',
                    ]
                ],
            ]
        )) {
            // valid
            $nisn = $this->request->getVar('nisn');
            $password = $this->request->getVar('password');
            $cek_login = $this->ModelPendaftaran->login_siswa($nisn, $password);
            if ($cek_login) {
                session()->set('id_siswa', $cek_login['id_siswa']);
                session()->set('nisn', $cek_login['nisn']);
                session()->set('nama_lengkap', $cek_login['nama_lengkap']);
                session()->set('level', 'siswa');
                return redirect()->to('siswa');
            }else {
                session()->setFlashdata('pesan', 'Nisn atau Password Anda Salah');
                return redirect()->to('auth/logins');
            }

        }else {
            // tidak Valid
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('auth/logins')->withInput()->with('validation', $validation);
        }
    }
    public function logouts()
    {
        session()->remove('nisn');
        session()->remove('nama_lengkap');
       session()->remove('level');
       session()->setFlashdata('pesan', 'Logout Success');
       return redirect()->to('auth/logins');
    }
}
