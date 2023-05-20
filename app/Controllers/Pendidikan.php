<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelPendidikan;

class Pendidikan extends BaseController
{
    public function __construct()
    {
        $this->ModelPendidikan = new ModelPendidikan();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Pendidikan',
            'pendidikan' => $this->ModelPendidikan->getAllData() 
        ];
        return view('admin/v_pendidikan', $data);
    }
    public function insertData()
    {
        $data = [
            'pendidikan' => $this->request->getVar('pendidikan')
        ];
        $this->ModelPendidikan->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('pendidikan');
    } 
    public function editData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan,
            'pendidikan' => $this->request->getVar('pendidikan')
        ];
        $this->ModelPendidikan->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('pendidikan');
    } 
    public function deleteData($id_pendidikan)
    {
        $data = [
            'id_pendidikan' => $id_pendidikan
        ];
        $this->ModelPendidikan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('pendidikan');
    } 
}
