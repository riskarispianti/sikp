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
            'komoditas' => $this->komoditasModel->findAll()
        ];
        return view('/more/komoditas/home', $data);
    }
    public function tambah()
    {
        $data = [
            'title' => 'Komoditas | Ketersediaan Pangan',
            'komoditas' => $this->komoditasModel->findAll()
        ];
        return view('/more/komoditas/tambah', $data);
    }
    public function edit()
    {
        $data = [
            'title' => 'Komoditas | Ketersediaan Pangan',
            'komoditas' => $this->komoditasModel->findAll()
        ];
        return view('/more/komoditas/edit', $data);
    }
    public function hapus($id_kom)
    {
        $this->komoditasModel->delete($id_kom);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/komoditas');
    }
}
