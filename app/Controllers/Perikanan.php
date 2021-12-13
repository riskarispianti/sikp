<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\InfrastrukturModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
use App\Models\SentraModel;
use App\Models\TempatModel;
use App\Models\PerikananModel;

class Perikanan extends BaseController
{
    protected $perikananModel;
    protected $infrastrukturModel;
    protected $komoditasModel;
    protected $produsenModel;
    protected $sentraModel;
    protected $tempatModel;

    public function __construct()
    {
        $this->perikananModel = new PerikananModel();
        $this->infrastrukturModel = new InfrastrukturModel();
        $this->komoditasModel = new KomoditasModel();
        $this->produsenModel = new ProdusenModel();
        $this->sentraModel = new SentraModel();
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Laporan | Ketersediaan Pangan',
            'perikanan' => $this->perikananModel->getIkan()
        ];
        echo view('perikanan/data_pangan', $data);
    }

    public function detail($id_ikan)
    {
        $data = [
            'title' => 'Detail Laporan | Ketersediaan Pangan',
            'perikanan' => $this->perikananModel->getIkan($id_ikan)
        ];
        return view('perikanan/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Perikanan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->getIka('g_kom'),
            'tempat' => $this->tempatModel->findAll(),
            'sentra' => $this->sentraModel->findAll(),
            'infrastruktur' => $this->infrastrukturModel->findAll(),
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('perikanan/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'jml_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'jumlah produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'waktu_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'waktu produksi harus diisi.'
                ]
            ],
            'biaya_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'biaya produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'harga_hsl_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'harga jual produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'alat_teknologi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alat dan teknologi harus diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('perikanan/tambah')->withInput()->with('validation', $validation);
        }

        $this->perikananModel->insert([
            'jenis_ikan' => $this->request->getVar('jenis_ikan'),
            'jml_prod' => $this->request->getVar('jml_prod'),
            'lama_prod' => $this->request->getVar('lama_prod'),
            'waktu_prod' => $this->request->getVar('waktu_prod'),
            'biaya_prod' => $this->request->getVar('biaya_prod'),
            'harga_hsl_prod' => $this->request->getVar('harga_hsl_prod'),
            'wadah_budidaya' => $this->request->getVar('wadah_budidaya'),
            'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
            'benih' => $this->request->getVar('benih'),
            'jns_asal_pakan' => $this->request->getVar('jns_asal_pakan'),
            'alat_teknologi' => $this->request->getVar('alat_teknologi'),
            'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
            'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
            'nama_anc' => $this->request->getVar('nama_anc'),
            'penanggulangan' => $this->request->getVar('penanggulangan'),
            'id_kom' => $this->request->getVar('id_kom'),
            'id_tp' => $this->request->getVar('id_tp'),
            'id_sp' => $this->request->getVar('id_sp'),
            'id_ip' => $this->request->getVar('id_ip'),
            'id_produsen' => $this->request->getVar('id_produsen')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/perikanan');
    }

    public function edit($id_ikan)
    {
        $data = [
            'title' => 'Edit Data perikanan',
            'perikanan' => $this->perikananModel->getIkan($id_ikan),
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->getIka('g_kom'),
            'tempat' => $this->tempatModel->findAll(),
            'sentra' => $this->sentraModel->findAll(),
            'infrastruktur' => $this->infrastrukturModel->findAll(),
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('perikanan/edit', $data);
    }

    public function update($id_ikan)
    {
        // validasi input
        if (!$this->validate([
            'jml_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'jumlah produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'waktu_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'waktu produksi harus diisi.'
                ]
            ],
            'biaya_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'biaya produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'harga_hsl_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'harga jual produksi harus diisi.',
                    'numeric' => 'isi harus angka.'
                ]
            ],
            'alat_teknologi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alat dan teknologi harus diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->perikananModel->update($id_ikan, [
            'jenis_ikan' => $this->request->getVar('jenis_ikan'),
            'jml_prod' => $this->request->getVar('jml_prod'),
            'lama_prod' => $this->request->getVar('lama_prod'),
            'waktu_prod' => $this->request->getVar('waktu_prod'),
            'biaya_prod' => $this->request->getVar('biaya_prod'),
            'harga_hsl_prod' => $this->request->getVar('harga_hsl_prod'),
            'wadah_budidaya' => $this->request->getVar('wadah_budidaya'),
            'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
            'benih' => $this->request->getVar('benih'),
            'jns_asal_pakan' => $this->request->getVar('jns_asal_pakan'),
            'alat_teknologi' => $this->request->getVar('alat_teknologi'),
            'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
            'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
            'nama_anc' => $this->request->getVar('nama_anc'),
            'penanggulangan' => $this->request->getVar('penanggulangan'),
            'id_kom' => $this->request->getVar('id_kom'),
            'id_tp' => $this->request->getVar('id_tp'),
            'id_sp' => $this->request->getVar('id_sp'),
            'id_ip' => $this->request->getVar('id_ip'),
            'id_produsen' => $this->request->getVar('id_produsen')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/perikanan');
    }

    public function hapus($id_ikan)
    {
        $this->perikananModel->delete($id_ikan);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/perikanan');
    }
}
