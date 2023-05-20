<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelJalurMasuk;

class Jalur extends BaseController
{
    public function __construct()
    {
        $this->ModelJalurMasuk = new ModelJalurMasuk();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Jalur Masuk',
            'jalur' => $this->ModelJalurMasuk->getallData()
        ];
        return view('admin/v_jalurmasuk', $data);
    }
    public function insertData()
    {
        $data = [
            'jalur_masuk' => $this->request->getVar('jalur_masuk'),
            'kuota' => $this->request->getVar('kuota')
        ];
        $this->ModelJalurMasuk->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('jalur');
    } 
    public function editData($id_jalur)
    {
        $data = [
            'id_jalur' => $id_jalur,
            'jalur_masuk' => $this->request->getVar('jalur_masuk'),
            'kuota' => $this->request->getVar('kuota')
        ];
        $this->ModelJalurMasuk->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('jalur');
    } 
    public function deleteData($id_jalur)
    {
        $data = [
            'id_jalur' => $id_jalur
        ];
        $this->ModelJalurMasuk->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('jalur');
    } 
}
