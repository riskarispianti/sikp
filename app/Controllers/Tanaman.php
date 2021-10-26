<?php

namespace App\Controllers;

class Tanaman extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan'
    ];
    return view('laporan_pangan/data_pangan', $data);
  }
  public function detail()
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan'
    ];
    return view('laporan_pangan/detail', $data);
  }
}
