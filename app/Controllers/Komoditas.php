<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\KomoditasModel;

class Komoditas extends BaseController
{
    protected $komoditasModel;

    public function __construct()
    {
        $this->komoditasModel = new KomoditasModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Komoditas | Ketersediaan Pangan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->findAll()
        ];
        return view('/more/komoditas/home', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'komoditas' => [
                'rules' => 'required|is_unique[komoditas.komoditas]',
                'errors' => [
                    'required' => '{field} harus diisi.',
                    'is_unique' => '{field} sudah ada.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/komoditas')->withInput()->with('validation', $validation);
        }

        $this->komoditasModel->insert([
            'komoditas' => $this->request->getVar('komoditas')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/komoditas');
    }

    public function edit($id_kom)
    {
        $data['komoditas'] = $this->komoditasModel->find($id_kom);
    }

    public function hapus($id_kom)
    {
        $this->komoditasModel->delete($id_kom);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/komoditas');
    }
}
