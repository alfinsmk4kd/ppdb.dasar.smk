<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBaner extends Model
{
    public function getAllData()
    {
       return $this->db->table('tb_baner')
       ->orderBy('id_baner','ASC')
       ->get()
       ->getResultArray();
    }
    public function insertData($data)
    {
        $this->db->table('tb_baner')->insert($data);
    }
    public function editData($data)
    {
       $this->db->table('tb_baner')
       ->where('id_baner', $data['id_baner'])
       ->update($data);
    }
    public function deleteData($data)
    {
       $this->db->table('tb_baner')
       ->where('id_baner', $data['id_baner'])
       ->delete($data);
    }
}
