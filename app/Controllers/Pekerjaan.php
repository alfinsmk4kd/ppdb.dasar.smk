<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelPekerjaan;

class Pekerjaan extends BaseController
{
    public function __construct()
    {
        $this->ModelPekerjaan = new ModelPekerjaan();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Pekerjaan',
            'pekerjaan' => $this->ModelPekerjaan->getAllData() 
        ];
        return view('admin/v_pekerjaan', $data);
    }
    public function insertData()
    {
        $data = [
            'pekerjaan' => $this->request->getVar('pekerjaan')
        ];
        $this->ModelPekerjaan->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('pekerjaan');
    } 
    public function editData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan,
            'pekerjaan' => $this->request->getVar('pekerjaan')
        ];
        $this->ModelPekerjaan->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('pekerjaan');
    } 
    public function deleteData($id_pekerjaan)
    {
        $data = [
            'id_pekerjaan' => $id_pekerjaan
        ];
        $this->ModelPekerjaan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('pekerjaan');
    } 
}
