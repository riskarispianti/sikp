<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home | Ketersediaan Pangan'
    ];
    return view('pangan/dashboard', $data);
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
}
