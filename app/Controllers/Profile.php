<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\UsersModel;

class Profile extends BaseController
{
  protected $usersModel;

  public function __construct()
  {
    $this->usersModel = new UsersModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Profile',
      'profile' => $this->usersModel->findAll()
    ];
    return view('profile/profile', $data);
  }
}
