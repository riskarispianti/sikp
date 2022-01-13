<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Users extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data = [
            'title' => 'Login Ketersediaan Pangan'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username_u' => 'required|min_length[5]|max_length[20]',
                'password_u' => 'required|min_length[5]|max_length[20]|validateUser[username_u,password_u]',
            ];

            $errors = [
                'password_u' => [
                    'validateUser' => 'Login Gagal!!'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();

                $user = $model->where('username_u', $this->request->getVar('username_u'))
                    ->first();

                $this->setUserSession($user);

                return redirect()->to('dashboard');
            }
        }

        return view('profile/login', $data);
    }
    private function setUserSession($user)
    {
        $data = [
            'id_u' => $user['id_u'],
            'nama_u' => $user['nama_u'],
            'gbr_u' => $user['gbr_u'],
            'username_u' => $user['username_u'],
            'isLoggedIn' => true,
        ];

        session()->set($data);
        return true;
    }

    public function register()
    {
        helper(['form']);
        $data = [
            'title' => 'Register'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama_u' => 'required|min_length[3]|max_length[40]',
                'gbr_u' => 'max_size[gbr_u,2048]',
                'username_u' => 'required|min_length[5]|max_length[20]',
                'password_u' => 'required|min_length[5]|max_length[20]',
                'password_confirm' => 'matches[password_u]',
            ];
            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();

                //ambil gambar
                $file = $this->request->getFile('gbr_u');
                //apakan tidak ada gambar yang diupload
                if ($file->getError() == 4) {
                    $namaGambar = 'users.png';
                } else {
                    $file->move('img');
                    $namaGambar = $file->getName();
                }

                $newData = [
                    'nama_u' => $this->request->getVar('nama_u'),
                    'gbr_u' => $namaGambar,
                    'username_u' => $this->request->getVar('username_u'),
                    'password_u' => $this->request->getVar('password_u'),
                ];
                $model->save($newData);

                session()->setFlashdata('success', 'Silahkan login');
                return redirect()->to('/');
            }
        }

        return view('profile/register', $data);
    }

    public function lupapass()
    {
        helper(['form']);
        $data = [
            'title' => 'Lupa Password'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'username_u' => 'required|min_length[5]|max_length[20]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();

                $user = $model->where('username_u', $this->request->getVar('username_u'))
                    ->first();

                return redirect()->to('lupa_pass')->withInput($user);
            }
        }

        return view('profile/lupa', $data);
    }
    public function lupa_pass()
    {
        helper(['form']);
        $data = [
            'title' => 'Lupa Password'
        ];

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'password_u' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password_u]',
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UsersModel();

                $newData = [
                    'id_u' => $model->find('id_u'),
                    'password_u' => $this->request->getPost('password_u'),
                ];

                $model->save($newData);

                session()->setFlashdata('success', 'Silahkan Login');
                return redirect()->to('/');
            }
        }

        return view('profile/lupa_pass', $data);
    }

    public function profile()
    {
        helper(['form']);
        $model = new UsersModel();

        if ($this->request->getMethod() == 'post') {
            $rules = [
                'nama_u' => 'required|min_length[3]|max_length[40]',
                'gbr_u' => 'max_size[gbr_u,2048]',
                'username_u' => 'required|min_length[5]|max_length[20]'
            ];

            if ($this->request->getPost('password_u') != '') {
                $rules['password_u'] = 'required|min_length[5]|max_length[255]';
                $rules['password_confirm'] = 'matches[password_u]';
            }

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $fileGambar = $this->request->getFile('gbr_u');
                if ($fileGambar->getError() == 4) {
                    $namaGambar = $this->request->getVar('gambarLama');
                } else {
                    $fileGambar->move('img');
                    $namaGambar = $fileGambar->getName();
                }

                $newData = [
                    'id_u' => session()->get('id_u'),
                    'nama_u' => $this->request->getPost('nama_u'),
                    'gbr_u' => $namaGambar,
                    'username_u' => $this->request->getPost('username_u'),
                ];

                if ($this->request->getPost('password_u') != '') {
                    $newData['password_u'] = $this->request->getPost('password_u');
                }

                $model->save($newData);
                $user = $model->where('username_u', $this->request->getVar('username_u'))
                    ->first();

                $this->setUserSession($user);

                session()->setFlashdata('success', 'Berhasil Update Profile!!');
                return redirect()->to('profile');
            }
        }

        $data = [
            'title' => 'Profile Ketersediaan Pangan',
            'user' => $model->where('id_u', session()->get('id_u'))->first()
        ];

        return view('profile/profile', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
