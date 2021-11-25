<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\InfrastrukturModel;

class Infrastruktur extends BaseController
{
    protected $infrastrukturModel;

    public function __construct()
    {
        $this->infrastrukturModel = new InfrastrukturModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Infrastruktur | Ketersediaan Pangan',
            'infrastruktur' => $this->infrastrukturModel->findAll()
        ];
        return view('/more/infrastruktur/home', $data);
    }
}
