<?php

namespace App\Controllers;

use App\Models\ProfileModel;

class Login extends BaseController
{
  public function index()
  {
    return view('log_in/login');
  }

  public function process()
  {
    $profile = new ProfileModel();
    $username = $this->request->getVar('username');
    $password = $this->request->getVar('password');
    $dataProfile = $profile->where([
      'username' => $username,
    ])->first();
    if ($dataProfile) {
      if (password_verify($password, $dataProfile->password)) {
        session()->set([
          'username' => $dataProfile->username,
          'nama_dinas' => $dataProfile->nama_dinas,
          'logged_in' => TRUE
        ]);
        return redirect()->to(base_url());
      } else {
        session()->setFlashdata('error', 'Username & Password Salah');
        return redirect()->back();
      }
    } else {
      session()->setFlashdata('error', 'Username & Password Salah');
      return redirect()->back();
    }
  }

  function logout()
  {
    session()->destroy();
    return redirect()->to('/login');
  }
}
