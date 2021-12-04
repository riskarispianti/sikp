<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\PeternakanModel;
use App\Models\InfrasternakModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
use App\Models\SentraModel;
use App\Models\TempatModel;

class Peternakan extends BaseController
{
    protected $peternakanModel;
    protected $infrasternakModel;
    protected $komoditasModel;
    protected $produsenModel;
    protected $sentraModel;
    protected $tempatModel;

    public function __construct()
    {
        $this->peternakanModel = new PeternakanModel();
        $this->infrasternakModel = new InfrasternakModel();
        $this->komoditasModel = new KomoditasModel();
        $this->produsenModel = new ProdusenModel();
        $this->sentraModel = new SentraModel();
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Laporan | Ketersediaan Pangan',
            'peternakan' => $this->peternakanModel->getTernak()
        ];
        echo view('peternakan/data_pangan', $data);
    }

    public function detail($id_ternak)
    {
        $data = [
            'title' => 'Detail Laporan | Ketersediaan Pangan',
            'peternakan' => $this->peternakanModel->getTernak($id_ternak)
        ];
        return view('peternakan/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Peternakan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->findAll(),
            'tempat' => $this->tempatModel->findAll(),
            'sentra' => $this->sentraModel->findAll(),
            'infrastruktur' => $this->infrasternakModel->findAll(),
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('peternakan/tambah', $data);
    }
}
