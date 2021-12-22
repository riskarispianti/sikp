<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\InfrasternakModel;

class Infrasternak extends BaseController
{
    protected $infrasternakModel;

    public function __construct()
    {
        $this->infrasternakModel = new InfrasternakModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Infrastruktur ternak | Ketersediaan Pangan',
            'infrasternak' => $this->infrasternakModel->findAll()
        ];

        return view('/more/infrasternak/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Infrastruktur Ternak | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/infrasternak/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'pemilik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'lok_rph' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'lokasi rph harus diisi.'
                ]
            ],
            'kapasitas_rph' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'kapasitas rph harus diisi.',
                    'numeric' => 'isi harus number.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/infrasternak/tambah')->withInput()->with('validation', $validation);
        }

        $this->infrasternakModel->insert([
            'pemilik' => $this->request->getVar('pemilik'),
            'kandang' => $this->request->getVar('kandang'),
            'lok_rph' => $this->request->getVar('lok_rph'),
            'kapasitas_rph' => $this->request->getVar('kapasitas_rph')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/infrasternak');
    }

    public function edit($id_ipt)
    {
        $data = [
            'title' => 'Edit | Ketersediaan Pangan',
            'infrasternak' => $this->infrasternakModel->find($id_ipt),
            'validation' => \Config\Services::validation()
        ];
        return view('/more/infrasternak/edit', $data);
    }

    public function update($id_ipt)
    {
        // validasi input
        if (!$this->validate([
            'kandang' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'lok_rph' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'lokasi rph harus diisi.'
                ]
            ],
            'kapasitas_rph' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'kapasitas rph harus diisi.',
                    'numeric' => 'isi harus number.'
                ]
            ],
            'pemilik' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->infrasternakModel->update($id_ipt, [
            'kandang' => $this->request->getVar('kandang'),
            'lok_rph' => $this->request->getVar('lok_rph'),
            'kapasitas_rph' => $this->request->getVar('kapasitas_rph'),
            'pemilik' => $this->request->getVar('pemilik')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/infrasternak');
    }

    public function hapus($id_ipt)
    {
        $this->infrasternakModel->delete($id_ipt);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/infrasternak');
    }
}
