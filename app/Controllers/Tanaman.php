<?php

namespace App\Controllers;

use App\Models\TanamanModel;

class Tanaman extends BaseController
{
  protected $tanamanModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam()
    ];
    echo view('tanaman/data_pangan', $data);
  }
  public function detail($id_tanam)
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam)
    ];
    return view('tanaman/detail', $data);
  }
  public function tambah()
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan'
    ];
    return view('tanaman/tambah', $data);
  }
}
