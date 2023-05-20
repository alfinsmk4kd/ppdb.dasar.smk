<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAgama extends Model
{
    public function getAllData()
    {
       return $this->db->table('tb_agama')
       ->orderBy('id_agama','ASC')
       ->get()
       ->getResultArray();
    }
    public function insertData($data)
    {
        $this->db->table('tb_agama')->insert($data);
    }
    public function editData($data)
    {
       $this->db->table('tb_agama')
       ->where('id_agama', $data['id_agama'])
       ->update($data);
    }
    public function deleteData($data)
    {
       $this->db->table('tb_agama')
       ->where('id_agama', $data['id_agama'])
       ->delete($data);
    }
}
