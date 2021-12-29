<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Login extends BaseController
{
  protected $usersModel;

  public function __construct()
  {
    helper('form');
    $this->usersModel = new UsersModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Login Ketersediaan Pangan'
    ];
    return view('log_in/login', $data);
  }

  public function auth()
  {
    if ($this->validate([
      'username_u' => [
        'rules'  => 'required',
        'errors' => [
          'required' => 'username harus diisi.',
        ],
      ],
      'password_u' => [
        'rules'  => 'required',
        'errors' => [
          'required' => 'password harus diisi.'
        ],
      ]
    ])) {
      //jika valid
      $username = $this->request->getPost('username_u');
      $password = $this->request->getPost('password_u');
      $cek = $this->usersModel->auth_l($username, $password);
      if ($cek) {
        //jika datanya cocok
        session()->set('log', true);
        session()->set('nama_u', $cek['nama_u']);
        session()->set('gbr_u', $cek['gbr_u']);
        session()->set('username_u', $cek['username_u']);
        session()->set('password_u', $cek['password_u']);
        session()->set('created_at', $cek['created_at']);
        return redirect()->to('/dashboard');
      } else {
        session()->setFlashdata('pesan', 'Login Gagal!!');
        return redirect()->to('/');
      }
    } else {
      // jika tidak valid
      session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
      return redirect()->to('/');
      // if 
    }
  }

  public function logout()
  {
    session()->remove('log');
    session()->remove('nama_u');
    session()->remove('gbr_u');
    session()->remove('created_at');

    session()->setFlashdata('pesan', 'Anda Telah Logout.');
    return redirect()->to('/');
  }
}
