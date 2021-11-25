<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProdusenModel;

class Produsen extends BaseController
{
    protected $produsenModel;
    public function __construct()
    {
        $this->produsenModel = new ProdusenModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Produsen | Ketersediaan Pangan',
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('/more/produsen/home', $data);
    }
}
