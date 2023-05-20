<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTa extends Model
{
    public function getAllData()
    {
       return $this->db->table('tb_ta')
       ->orderBy('id_ta','ASC')
       ->get()
       ->getResultArray();
    }
    public function insertData($data)
    {
        $this->db->table('tb_ta')->insert($data);
    }
    public function editData($data)
    {
       $this->db->table('tb_ta')
       ->where('id_ta', $data['id_ta'])
       ->update($data);
    }
    public function deleteData($data)
    {
       $this->db->table('tb_ta')
       ->where('id_ta', $data['id_ta'])
       ->delete($data);
    }
    public function resetStatus()
    {
       $this->db->table('tb_ta')
       ->update(['status' => 0]);
    }
    public function statusTa()
    {
       $this->db->table('tb_ta')
       ->where('status', '1')
       ->get()
       ->getRowArray();
    }

}
