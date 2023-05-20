<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelJurusan;

class Jurusan extends BaseController
{
    public function __construct()
    {
        $this->ModelJurusan = new ModelJurusan();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Jurusan',
            'jurusan' => $this->ModelJurusan->getAllData() 
        ];
        return view('admin/v_jurusan', $data);
    }
    public function insertData()
    {
        $data = [
            'jurusan' => $this->request->getVar('jurusan')
        ];
        $this->ModelJurusan->insertData($data);
        session()->setFlashdata('add', 'Data Berhasil Disimpan');
        return redirect()->to('jurusan');
    } 
    public function editData($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan,
            'jurusan' => $this->request->getVar('jurusan')
        ];
        $this->ModelJurusan->editData($data);
        session()->setFlashdata('update', 'Data Berhasil Diubah');
        return redirect()->to('Jurusan');
    } 
    public function deleteData($id_jurusan)
    {
        $data = [
            'id_jurusan' => $id_jurusan
        ];
        $this->ModelJurusan->deleteData($data);
        session()->setFlashdata('delete', 'Data Berhasil Hapus');
        return redirect()->to('jurusan');
    } 
}
