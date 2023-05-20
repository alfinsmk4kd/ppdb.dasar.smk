<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelPenghasilan;

class Penghasilan extends BaseController
{
    public function __construct()
    {
        $this->ModelPenghasilan = new ModelPenghasilan();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Penghasilan',
            'penghasilan' => $this->ModelPenghasilan->getAllData() 
        ];
        return view('admin/v_penghasilan', $data);
    }
    public function insertData()
    {
        $data = [
            'penghasilan' => $this->request->getVar('penghasilan')
        ];
        $this->ModelPenghasilan->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('penghasilan');
    } 
    public function editData($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan,
            'penghasilan' => $this->request->getVar('penghasilan')
        ];
        $this->ModelPenghasilan->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('penghasilan');
    } 
    public function deleteData($id_penghasilan)
    {
        $data = [
            'id_penghasilan' => $id_penghasilan
        ];
        $this->ModelPenghasilan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('penghasilan');
    } 
}
