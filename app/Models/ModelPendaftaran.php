<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPendaftaran extends Model
{
    public function getAllData()
    {
       return $this->db->table('tb_siswa')
       ->orderBy('id_siswa','ASC')
       ->get()
       ->getResultArray();
    }

    public function getBiodatasiswa()
    {
        return $this->db->table('tb_siswa')
        ->join('tb_jalur', 'tb_jalur.id_jalur =tb_siswa.id_jalur')
       ->where('id_siswa', session()->get('id_siswa'))
       ->get()
       ->getRowArray();
    }

    public function insertData($data)
    {
        $this->db->table('tb_siswa')->insert($data);
    }

    public function editData($data)
    {
       $this->db->table('tb_siswa')
       ->where('id_siswa', $data['id_siswa'])
       ->update($data);
    }

    public function deleteData($data)
    {
       $this->db->table('tb_siswa')
       ->where('id_siswa', $data['id_siswa'])
       ->delete($data);
    }

    public function login_siswa($nisn, $password)
   {
        return $this->db->table('tb_siswa')->where(
            [
                'nisn'     => $nisn,
                'password'  => $password
            ]
        )->get()->getRowArray();
   }

   public function noPendaftar()
   {
        $code = $this->db->table('tb_siswa')
        ->select('RIGHT(no_daftar,4) as no_daftar', false)
        ->select('LEFT(no_daftar,8) as tanggal', false)
        ->orderBy('no_daftar', 'DESC')
        ->limit(1)->get()->getRowArray();

        if (isset($code['no_daftar']) == null) {
            $no = 1;
        }else {
            if ($code['no_daftar'] == date('Ymd')) {
                $no = intval($code['no_daftar']) + 1;
            }else {
                $no = 1;
            }
        }

        $tgl = date('Ymd');
        $b   = str_pad($no, 4, "0", STR_PAD_LEFT);
        $no_daftar = $tgl . $b;
        return $no_daftar;
   }
}
