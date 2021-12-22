<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\InfrastrukturModel;

class Infrastruktur extends BaseController
{
    protected $infrastrukturModel;

    public function __construct()
    {
        $this->infrastrukturModel = new InfrastrukturModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Infrastruktur | Ketersediaan Pangan',
            'infrastruktur' => $this->infrastrukturModel->findAll()
        ];

        return view('/more/infrastruktur/home', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Infrastruktur | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/infrastruktur/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'sarana_pengairan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sarana pengairan harus diisi.'
                ]
            ],
            'pengel_jar_irigasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pengelolaann jaringan irigasi harus diisi.'
                ]
            ],
            'infras_pengel_air' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'infrastruktur pengelolaan air harus diisi.'
                ]
            ]
        ])) {
            return redirect()->to('/infrastruktur/tambah')->withInput();
        }

        $this->infrastrukturModel->insert([
            'sarana_pengairan' => $this->request->getVar('sarana_pengairan'),
            'pengel_jar_irigasi' => $this->request->getVar('pengel_jar_irigasi'),
            'infras_pengel_air' => $this->request->getVar('infras_pengel_air')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/infrastruktur');
    }

    public function edit($id_ip)
    {
        $data = [
            'title' => 'infrastruktur | Ketersediaan Pangan',
            'infrastruktur' => $this->infrastrukturModel->find($id_ip),
            'validation' => \Config\Services::validation()
        ];
        return view('/more/infrastruktur/edit', $data);
    }

    public function update($id_ip)
    {
        // validasi input
        if (!$this->validate([
            'sarana_pengairan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sarana pengairan harus diisi.'
                ]
            ],
            'pengel_jar_irigasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'pengelolaann jaringan irigasi harus diisi.'
                ]
            ],
            'infras_pengel_air' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'infrastruktur pengelolaan air harus diisi.'
                ]
            ]
        ])) {
            return redirect()->back()->withInput();
        }

        $this->infrastrukturModel->update($id_ip, [
            'sarana_pengairan' => $this->request->getVar('sarana_pengairan'),
            'pengel_jar_irigasi' => $this->request->getVar('pengel_jar_irigasi'),
            'infras_pengel_air' => $this->request->getVar('infras_pengel_air')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/infrastruktur');
    }

    public function hapus($id_ip)
    {
        $this->infrastrukturModel->delete($id_ip);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/infrastruktur');
    }
}
