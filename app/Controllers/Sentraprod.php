<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\SentraModel;

class Sentraprod extends BaseController
{
    protected $sentraModel;

    public function __construct()
    {
        $this->sentraModel = new SentraModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sentra Produksi | Ketersediaan Pangan',
            'sentra' => $this->sentraModel->findAll()
        ];
        return view('/more/sentra_prod/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Sentra Produksi | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/sentra_prod/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'nama_sp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kelurahan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/sentraprod/tambah')->withInput()->with('validation', $validation);
        }

        $this->sentraModel->insert([
            'nama_sp' => $this->request->getVar('nama_sp'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan' => $this->request->getVar('kelurahan')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/sentraprod');
    }

    public function edit($id_sp)
    {
        $data = [
            'title' => 'Sentra Produksi | Ketersediaan Pangan',
            'sentra' => $this->sentraModel->find($id_sp),
            'validation' => \Config\Services::validation()
        ];
        return view('/more/sentra_prod/edit', $data);
    }

    public function update($id_sp)
    {
        // validasi input
        if (!$this->validate([
            'nama_sp' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kecamatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kelurahan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->sentraModel->update($id_sp, [
            'nama_sp' => $this->request->getVar('nama_sp'),
            'kecamatan' => $this->request->getVar('kecamatan'),
            'kelurahan' => $this->request->getVar('kelurahan')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/sentraprod');
    }

    public function hapus($id_sp)
    {
        $this->sentraModel->delete($id_sp);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/sentraprod');
    }
}
