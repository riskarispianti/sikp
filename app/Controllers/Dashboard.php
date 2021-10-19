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
}
