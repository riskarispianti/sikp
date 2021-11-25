<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SentraModel;

class Sentraprod extends BaseController
{
    protected $sentraModel;

    public function __construct()
    {
        $this->sentraModel = new SentraModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sentra Produksi | Ketersediaan Pangan',
            'sentra' => $this->sentraModel->findAll()
        ];
        return view('/more/sentra_prod/home', $data);
    }
}
