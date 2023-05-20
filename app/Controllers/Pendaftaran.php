<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelTa;
use App\Models\ModelPendaftaran;

class Pendaftaran extends BaseController
{
    public function __construct()
    {
        $this->ModelTa = new ModelTa();
        $this->ModelPendaftaran = new ModelPendaftaran();
        helper('form');
    }
    public function index()
    {
        $data = [
            'title' => 'PPDB ONLINE',
            'subtitle' => 'Pendaftaran',
            'ta' => $this->ModelTa->statusTa(),
            'validation' => \Config\Services::validation(),
        ];
        return view('siswa/v_dashboard', $data);
    
    }
}
