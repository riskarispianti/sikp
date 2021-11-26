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
            'komoditas' => $this->komoditasModel->getKomoditas()
        ];
        return view('/more/komoditas/home', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Komoditas | Ketersediaan Pangan',
            'validation' => \Config\Services::validation()
        ];
        return view('/more/komoditas/tambah', $data);
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

            return redirect()->to('/komoditas/tambah')->withInput()->with('validation', $validation);
        }

        $komoditas = [
            'komoditas' => $this->request->getVar('komoditas')
        ];
        $this->komoditasModel->insert($komoditas);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/komoditas');
    }

    public function edit($id_kom)
    {
        $data = [
            'title' => 'Komoditas | Ketersediaan Pangan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->getKomoditas($id_kom)
        ];
        return view('/more/komoditas/edit', $data);
    }

    public function update($id_kom)
    {
        if (!$this->validate([
            'komoditas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('/komoditas/edit' . $this->request->getVar('id_kom'))->withInput()->with('validation', $validation);
        }

        $this->komoditasModel->save([
            'id_kom' => $id_kom,
            'komoditas' => $this->request->getVar('komoditas')
        ]);

        session()->setFlashdata('pesan', 'diubah.');

        return redirect()->to('/komoditas');
    }

    public function hapus($id_kom)
    {
        $this->komoditasModel->delete($id_kom);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/komoditas');
    }
}
