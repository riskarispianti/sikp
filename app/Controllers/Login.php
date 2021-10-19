<?php

namespace App\Controllers;

class Login extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Login | Ketersediaan Pangan'
    ];
    return view('log_in/login', $data);
  }
}
