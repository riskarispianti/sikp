<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InfrastrukturModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
use App\Models\SentraModel;
use App\Models\TempatModel;
use App\Models\PerikananModel;

class Perikanan extends BaseController
{
    protected $perikananModel;
    protected $infrastrukturModel;
    protected $komoditasModel;
    protected $produsenModel;
    protected $sentraModel;
    protected $tempatModel;

    public function __construct()
    {
        $this->perikananModel = new PerikananModel();
        $this->infrastrukturModel = new InfrastrukturModel();
        $this->komoditasModel = new KomoditasModel();
        $this->produsenModel = new ProdusenModel();
        $this->sentraModel = new SentraModel();
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Laporan | Ketersediaan Pangan',
            'perikanan' => $this->perikananModel->getIkan()
        ];
        echo view('perikanan/data_pangan', $data);
    }

    public function detail($id_ikan)
    {
        $data = [
            'title' => 'Detail Laporan | Ketersediaan Pangan',
            'perikanan' => $this->perikananModel->getIkan($id_ikan)
        ];
        return view('perikanan/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Perikanan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->findAll(),
            'tempat' => $this->tempatModel->findAll(),
            'sentra' => $this->sentraModel->findAll(),
            'infrastruktur' => $this->infrastrukturModel->findAll(),
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('perikanan/tambah', $data);
    }
}
