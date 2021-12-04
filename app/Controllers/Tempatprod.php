<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TempatModel;

class Tempatprod extends BaseController
{
    protected $tempatModel;

    public function __construct()
    {
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Tempat Produksi | Ketersediaan Pangan',
            'tempat' => $this->tempatModel->findAll()
        ];
        return view('/more/tempat_prod/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tempat Produksi | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/tempat_prod/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'letak_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'luas_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kepemilikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'status_lahan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/tempatprod/tambah')->withInput()->with('validation', $validation);
        }

        $this->tempatModel->insert([
            'letak_prod' => $this->request->getVar('letak_prod'),
            'luas_prod' => $this->request->getVar('luas_prod'),
            'kepemilikan' => $this->request->getVar('kepemilikan'),
            'status_lahan' => $this->request->getVar('status_lahan')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/tempatprod');
    }

    public function edit($id_tp)
    {
        $data = [
            'title' => 'Tempat Produksi | Ketersediaan Pangan',
            'tempat' => $this->tempatModel->find($id_tp),
            'validation' => \Config\Services::validation()
        ];
        return view('/more/tempat_prod/edit', $data);
    }

    public function update($id_tp)
    {
        // validasi input
        if (!$this->validate([
            'letak_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'luas_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kepemilikan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'status_lahan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->tempatModel->update($id_tp, [
            'letak_prod' => $this->request->getVar('letak_prod'),
            'luas_prod' => $this->request->getVar('luas_prod'),
            'kepemilikan' => $this->request->getVar('kepemilikan'),
            'status_lahan' => $this->request->getVar('status_lahan')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/tempatprod');
    }

    public function hapus($id_tp)
    {
        $this->tempatModel->delete($id_tp);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/tempatprod');
    }
}
