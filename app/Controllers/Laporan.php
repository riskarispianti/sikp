<?php

namespace App\Controllers;

class Laporan extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan'
    ];
    return view('laporan_pangan/data_pangan', $data);
  }
}
