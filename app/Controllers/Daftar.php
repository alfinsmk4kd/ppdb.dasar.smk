<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelTa;
use App\Models\ModelPendaftaran;

class Daftar extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->ModelTa = new ModelTa();
        $this->ModelPendaftaran = new ModelPendaftaran();
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Pendaftaran',
            'ta' => $this->ModelTa->statusTa(),
            'validation' => \Config\Services::validation(),
        ];
        return view('v_pendaftaran', $data);
    }
    public function insertData()
    {
        if ($this->validate([
            'nisn'  => [
                'label' => 'NISN',
                'rules' => 'required|is_unique[tb_siswa.nisn]|max_length[10]|min_length[10]',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi !!',
                    'is_unique'  => '{field} Sudah Terdaftar !!',
                    'min_length'  => '{field} Min 10 Digit !!',
                    'nax_length'  => '{field} Mix 10 Digit !!'
                    ]
                ],
                'nama_lengkap'  => [
                    'label' => 'Nama Lengkap',
                'rules' => 'required',
                'errors'    => [
                    'required'  => '{field} Wajib Diisi !!'
                    ]
                ],
                'nama_panggilan'  => [
                    'label' => 'Nama Panggilan',
                    'rules' => 'required',
                    'errors'    => [
                        'required'  => '{field} Wajib Diisi !!'
                        ]
                    ],
                    'tempat_lahir'  => [
                        'label' => 'Tempat Lahir',
                        'rules' => 'required',
                        'errors'    => [
                            'required'  => '{field} Wajib Diisi !!'
                            ]
                        ],
                        'tgl_lahir'  => [
                            'label' => 'Tanggal Lahir',
                            'rules' => 'required',
                            'errors'    => [
                                'required'  => '{field} Wajib Diisi !!'
                                ]
                            ],
                            'jk'  => [
                                'label' => 'Jenis Kelamin',
                                'rules' => 'required',
                                'errors'    => [
                                    'required'  => '{field} Wajib Diisi !!'
                                    ]
                                ],
                                ])) {
                                    // jika berhasil
                                    $no_daftar = $this->ModelPendaftaran->noPendaftar();
                                    $data = [
                                        'no_daftar' => $no_daftar,
                                        'tgl_daftar' => date('Y-m-d'),
                                        'nisn' => $this->request->getVar('nisn'),
                                        'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                                        'nama_panggilan' => $this->request->getVar('nama_panggilan'),
                                        'tempat_lahir' => $this->request->getVar('tempat_lahir'),
                                        'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                                        'jk' => $this->request->getVar('jk'),
                                        'password' => $this->request->getVar('nisn')
                                    ];
            $this->ModelPendaftaran->insertData($data);
            session()->setFlashdata('add', 'Anda Berhasil Mendaftar, Silahkan Login untuk Melengkapi Data Anda');
            return redirect()->to('/daftar');
            
        }else {
            // jika error
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            $validation = \Config\Services::validation();
            return redirect()->to('/daftar')->withInput()->with('validation', $validation);
        }

    }
    
}
