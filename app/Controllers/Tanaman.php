<?php

namespace App\Controllers;

class Tanaman extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan'
    ];
    return view('tanaman/data_pangan', $data);
  }
  public function detail()
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan'
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
