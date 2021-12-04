<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProfileModel;

class Profile extends BaseController
{
  protected $profileModel;

  public function __construct()
  {
    $this->profileModel = new ProfileModel();
  }
  public function index()
  {
    $data = [
      'title' => 'Profile',
      'profile' => $this->profileModel->findAll()
    ];
    return view('profile/profile', $data);
  }
}
