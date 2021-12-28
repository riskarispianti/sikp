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

  public function tambah()
  {
    $data = [
      'title' => 'Profile',
      'profile' => $this->usersModel->findAll(),
      'validation' => \Config\Services::validation()
    ];
    return view('profile/tambah', $data);
  }

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'nama_u' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'nama harus diisi.'
        ]
      ],
      'username_u' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'username harus diisi.'
        ]
      ],
      'password_u' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'password harus diisi.'
        ]
      ],
      'confpassword' => [
        'rules' => 'matches[password_u]',
        'errors' => [
          'required' => 'password tidak sesuai.'
        ]
      ],
      'gbr_u' => [
        'rules' => 'max_size[gbr_u,2048]|is_image[gbr_u]|mime_in[gbr_u,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'ukuran gambar terlalu besar',
          'is_image' => 'yang anda pilih bukan gambar',
          'mime_in' => 'yang anda pilih bukan gambar',
        ]
      ]
    ])) {
      return redirect()->to('/profile/tambah')->withInput();
    }

    //ambil gambar
    $file = $this->request->getFile('gbr_u');
    //apakan tidak ada gambar yang diupload
    if ($file->getError() == 4) {
      $namaGambar = 'users.png';
    } else {
      //generate nama gambar random
      $namaGambar = $file->getRandomName();
      //pindahkan gambar
      $file->move('img', $namaGambar);
    }

    $this->usersModel->insert([
      'nama_u' => $this->request->getVar('nama_u'),
      'gbr_u' => $namaGambar,
      'username_u' => $this->request->getVar('username_u'),
      'password_u' => md5($this->request->getVar('password_u'))
    ]);

    session()->setFlashdata('pesan', 'silahkan login.');

    return redirect()->to('/');
  }

  public function hapus($id_u)
  {
    $profile = $this->usersModel->find($id_u);

    if ($profile['gbr_u'] != 'users.png') {
      unlink('img/' . $profile['gbr_u']);
    }

    $this->usersModel->delete($id_u);
    return redirect()->to('/');
  }
}
