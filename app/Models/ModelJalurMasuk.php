<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelJalurMasuk extends Model
{
    public function getAllData()
    {
       return $this->db->table('tb_jalur')
       ->orderBy('id_jalur','ASC')
       ->get()
       ->getResultArray();
    }
    public function insertData($data)
    {
        $this->db->table('tb_jalur')->insert($data);
    }
    public function editData($data)
    {
       $this->db->table('tb_jalur')
       ->where('id_jalur', $data['id_jalur'])
       ->update($data);
    }
    public function deleteData($data)
    {
       $this->db->table('tb_jalur')
       ->where('id_jalur', $data['id_jalur'])
       ->delete($data);
    }
}
