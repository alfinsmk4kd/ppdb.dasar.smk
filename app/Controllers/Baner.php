<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelBaner;

class Baner extends BaseController
{
    public function __construct()
    {
        $this->ModelBaner = new ModelBaner();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Baner',
            'baner' => $this->ModelBaner->getAllData() 
        ];
        return view('admin/v_baner', $data);
    }
    public function insertData()
    {
        $file = $this->request->getFile('baner');
        $nama_file = $file->getRandomName();
        $data = [
            'ket' => $this->request->getVar('ket'),
            'baner' => $nama_file
        ];
        $file->move('aset/', $nama_file);
        $this->ModelBaner->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('baner');
    } 
    public function editData($id_baner)
    {
        $file = $this->request->getFile('baner');
        $nama_file = $file->getRandomName();
        $data = [
            'ket' => $this->request->getVar('ket'),
            'baner' => $nama_file
        ];
        $file->move('aset/', $nama_file);
        $this->ModelBaner->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('baner');
    } 
    public function deleteData($id_baner)
    {
        $data = [
            'id_baner' => $id_baner
        ];
        $this->ModelBaner->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('baner');
    } 
}
