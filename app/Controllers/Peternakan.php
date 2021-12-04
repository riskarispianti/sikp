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
    protected $infrastrukturModel;
    protected $komoditasModel;
    protected $produsenModel;
    protected $sentraModel;
    protected $tempatModel;

    public function __construct()
    {
        $this->peternakanModel = new PeternakanModel();
        $this->infrastrukturModel = new InfrasternakModel();
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
}
