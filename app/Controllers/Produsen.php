<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ProdusenModel;

class Produsen extends BaseController
{
    protected $produsenModel;

    public function __construct()
    {
        $this->produsenModel = new ProdusenModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Produsen | Ketersediaan Pangan',
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('/more/produsen/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Produsen | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/produsen/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'jml_penghasil_kom' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'pembinaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kelembagaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kesejahteraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/produsen/tambah')->withInput()->with('validation', $validation);
        }

        $this->produsenModel->insert([
            'jml_penghasil_kom' => $this->request->getVar('jml_penghasil_kom'),
            'pembinaan' => $this->request->getVar('pembinaan'),
            'kelembagaan' => $this->request->getVar('kelembagaan'),
            'kesejahteraan' => $this->request->getVar('kesejahteraan')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/produsen');
    }

    public function edit($id_produsen)
    {
        $data = [
            'title' => 'produsen | Ketersediaan Pangan',
            'produsen' => $this->produsenModel->find($id_produsen),
            'validation' => \Config\Services::validation()
        ];
        return view('/more/produsen/edit', $data);
    }

    public function update($id_produsen)
    {
        // validasi input
        if (!$this->validate([
            'jml_penghasil_kom' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'pembinaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kelembagaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'kesejahteraan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->produsenModel->update($id_produsen, [
            'jml_penghasil_kom' => $this->request->getVar('jml_penghasil_kom'),
            'pembinaan' => $this->request->getVar('pembinaan'),
            'kelembagaan' => $this->request->getVar('kelembagaan'),
            'kesejahteraan' => $this->request->getVar('kesejahteraan')
        ]);

        session()->setFlashdata('pesan', 'diubah.');

        return redirect()->to('/produsen');
    }

    public function hapus($id_produsen)
    {
        $this->produsenModel->delete($id_produsen);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/produsen');
    }
}
