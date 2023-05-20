<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Admin extends BaseController
{
    public function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Admin'
        ];
        return view('admin/v_dashboard', $data);
    }

    public function setting()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Setting',
            'setting' => $this->ModelAdmin->detailSetting()
        ];
        return view('admin/v_setting', $data);
    }
    public function insertSetting()
    {
        $file = $this->request->getFile('logo');
        if ($file->getError() == 4) {
            $data = [
                'nama_sekolah' => $this->request->getVar('nama_sekolah'),
                'alamat' => $this->request->getVar('alamat'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'profinsi' => $this->request->getVar('profinsi'),
                'no_telpon' => $this->request->getVar('no_telpon'),
                'email' => $this->request->getVar('email'),
                'web' => $this->request->getVar('web'),
                'deskripsi' => $this->request->getVar('deskripsi')
            ];
            $this->ModelAdmin->saveSetting($data);
        }else {
            $setting = $this->ModelAdmin->detailSetting();
            if ($setting['logo'] != "") {
               unlink('./logo/'. $setting['logo']);
            }
            $nama_file = $file->getRandomName();
            $data = [
                'nama_sekolah' => $this->request->getVar('nama_sekolah'),
                'alamat' => $this->request->getVar('alamat'),
                'kecamatan' => $this->request->getVar('kecamatan'),
                'kabupaten' => $this->request->getVar('kabupaten'),
                'profinsi' => $this->request->getVar('profinsi'),
                'no_telpon' => $this->request->getVar('no_telpon'),
                'email' => $this->request->getVar('email'),
                'web' => $this->request->getVar('web'),
                'deskripsi' => $this->request->getVar('deskripsi'),
                'logo' => $nama_file
            ];
            $file->move('logo/', $nama_file);
            $this->ModelAdmin->saveSetting($data);
            }
        session()->setFlashdata('pesan', 'Setting Berhasil Di Ganti!!!');
        return redirect()->to('admin/setting');
    }
    public function beranda()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Beranda',
            'beranda' => $this->ModelAdmin->detailSetting()
        ];
        return view('admin/v_beranda', $data);
    }
    public function saveBeranda()
    {
        $data = [
            'beranda'   => $this->request->getVar('beranda')
        ];
        $this->ModelAdmin->saveSetting($data);
        session()->setFlashdata('pesan', 'Beranda Berhasil Di Ganti!!!');
        return redirect()->to('admin/beranda');

    }

}
