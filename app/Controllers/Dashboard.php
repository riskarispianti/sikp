<?php

namespace App\Controllers;

use App\Models\TanamanModel;
use App\Models\PeternakanModel;

class Dashboard extends BaseController
{
  protected $tanamanModel;
  protected $peternakanModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
    $this->peternakanModel = new PeternakanModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Home | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam(),
      'peternakan' => $this->peternakanModel->getTernak()
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
