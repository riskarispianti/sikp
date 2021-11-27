<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TempatModel;

class Tempatprod extends BaseController
{
    protected $tempatModel;

    public function __construct()
    {
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Tempat Produksi | Ketersediaan Pangan',
            'tempat' => $this->tempatModel->findAll()
        ];
        return view('/more/tempat_prod/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tempat Produksi | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/tempat_prod/tambah', $data);
    }
}
