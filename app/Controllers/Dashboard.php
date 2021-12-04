<?php

namespace App\Controllers;

use App\Models\TanamanModel;

class Dashboard extends BaseController
{
  protected $tanamanModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Home | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam()
    ];
    return view('pangan/dashboard2', $data);
  }
  public function grafik()
  {
    $data = [
      'title' => 'Ketersediaan Pangan'
    ];
    return view('pangan/grafik', $data);
  }
  public function home2()
  {
    $data = [
      'title' => 'Ketersediaan Pangan'
    ];
    return view('pangan/dashboard2', $data);
  }
  public function persediaan()
  {
    $data = [
      'title' => 'Ketersediaan Pangan'
    ];
    return view('pangan/persediaan', $data);
  }
}
