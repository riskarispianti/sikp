<?php

namespace App\Controllers;

class Profile extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Profile'
    ];
    return view('profile/profile', $data);
  }
  public function registrasi()
  {
    $data = [
      'title' => 'Registrasi'
    ];
    return view('profile/registrasi', $data);
  }
}
