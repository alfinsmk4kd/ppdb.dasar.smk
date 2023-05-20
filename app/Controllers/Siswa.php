<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelPendaftaran;
use App\Models\ModelJalurMasuk;

class Siswa extends BaseController
{
    public function __construct()
    {
        $this->ModelPendaftaran = new ModelPendaftaran();
        $this->ModelJalurMasuk = new ModelJalurMasuk();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Siswa',
            'siswa'     => $this->ModelPendaftaran->getBiodataSiswa(),
            'jalur'     => $this->ModelJalurMasuk->getAllData()
        ];
        return view('siswa/v_dashboard', $data);
    }
    public function updateSiswa($id_siswa)
    {
        $data = [
            'id_siswa'  => $id_siswa,
            'id_jalur'  => $this->request->getVar('id_jalur')
        ];
        $this->ModelPendaftaran->editData($data);
        session()->setFlashdata('pesan', 'Pendaftaran Berhasil Diupdate');
        return redirect()->to('siswa');
    }
    public function updateFoto($id_siswa)
    {
        $file = $this->request->getFile('foto');
        $nama_file = $file->getRandomName();
        $data = [
            'id_siswa' => $id_siswa,
            'foto' => $nama_file
        ];
        $file->move('gambar/', $nama_file);
        $this->ModelPendaftaran->editData($data);
        session()->setFlashdata('pesan', 'Foto Berhasil Diupdate');
        return redirect()->to('siswa');
    }
    public function updatePeserta($id_siswa)
    {
        $data = [
            'id_siswa'  => $id_siswa,
            'id_jalur'  => $this->request->getVar('id_jalur')
        ];
        $this->ModelPendaftaran->editData($data);
        session()->setFlashdata('pesan', 'Identitas Peserta Didik Berhasil Diupdate');
        return redirect()->to('siswa');
    }
}
