<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTa;

class Ta extends BaseController
{
    public function __construct()
    {
        $this->ModelTa = new ModelTa();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Tahun Ajaran',
            'ta' => $this->ModelTa->getAllData() 
        ];
        return view('admin/v_ta', $data);
    }
    public function insertData()
    {
        $data = [
            'ta' => $this->request->getVar('ta'),
            'tahun' => $this->request->getVar('tahun'),
        ];
        $this->ModelTa->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('ta');
    } 
    public function editData($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'ta' => $this->request->getVar('ta'),
            'tahun' => $this->request->getVar('tahun'),
        ];
        $this->ModelTa->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('ta');
    } 
    public function deleteData($id_ta)
    {
        $data = [
            'id_ta' => $id_ta
        ];
        $this->ModelTa->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('ta');
    }
    public function statusAktif($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'status' => 1
        ];
        $this->ModelTa->resetStatus();
        $this->ModelTa->editData($data);
        session()->setFlashdata('add', 'Status Tahun Ajaran Berhasil Di Aktifkan');
        return redirect()->to('ta');
    }
    public function statusNonAktif($id_ta)
    {
        $data = [
            'id_ta' => $id_ta,
            'status' => 0
        ];
        $this->ModelTa->editData($data);
        session()->setFlashdata('delete', 'Status Tahun Ajaran Berhasil Di Nonaktifkan');
        return redirect()->to('ta');
    }
}
