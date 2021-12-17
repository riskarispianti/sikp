<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
  protected $usersModel;

  public function __construct()
  {
    $this->usersModel = new UsersModel();
  }

  public function index()
  {
    $login = $this->request->getPost('login');
    if ($login) {
      $username_u = $this->request->getPost('username_u');
      $password_u = $this->request->getPost('password_u');

      if ($username_u == '' or $password_u == '') {
        $err = "Silahkan masukan Username dan Password.";
      }

      if (empty($err)) {
        $dataUsers = $this->usersModel->where('username_u', $username_u)->first();
        if ($dataUsers['password_u'] != md5($password_u)) {
          $err = "Password tidak sesuai.";
        }
      }

      if (empty($err)) {
        $dataSesi = [
          'id_u' => $dataUsers['id_u'],
          'username_u' => $dataUsers['username_u'],
          'password_u' => $dataUsers['password_u']
        ];
        session()->set($dataSesi);
        return redirect()->to('/dashboard');
      }

      if ($err) {
        session()->setFlashdata('username_u', $username_u);
        session()->setFlashdata('error', $err);
        return redirect()->to('/');
      }
    }

    $data = [
      'title' => 'Login Ketersediaan Pangan'
    ];
    return view('log_in/login', $data);
  }

  public function logout()
  {
    session()->destroy();
    return redirect()->to('/');
  }
}
