<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\PeternakanModel;
use App\Models\InfrasternakModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
use App\Models\SentraModel;
use App\Models\TempatModel;

class Peternakan extends BaseController
{
    protected $peternakanModel;
    protected $infrasternakModel;
    protected $komoditasModel;
    protected $produsenModel;
    protected $sentraModel;
    protected $tempatModel;

    public function __construct()
    {
        $this->peternakanModel = new PeternakanModel();
        $this->infrasternakModel = new InfrasternakModel();
        $this->komoditasModel = new KomoditasModel();
        $this->produsenModel = new ProdusenModel();
        $this->sentraModel = new SentraModel();
        $this->tempatModel = new TempatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Data Laporan | Ketersediaan Pangan',
            'peternakan' => $this->peternakanModel->getTernak()
        ];
        echo view('peternakan/data_pangan', $data);
    }

    public function detail($id_ternak)
    {
        $data = [
            'title' => 'Detail Laporan | Ketersediaan Pangan',
            'peternakan' => $this->peternakanModel->getTernak($id_ternak)
        ];
        return view('peternakan/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Peternakan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->getTer('g_kom'),
            'tempat' => $this->tempatModel->findAll(),
            // 'sentra' => $this->sentraModel->findAll(),
            'infrasternak' => $this->infrasternakModel->findAll(),
            'produsen' => $this->produsenModel->findAll()
        ];
        return view('peternakan/tambah', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'jenis_ternak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis ternak harus diisi.'
                ]
            ],
            'jml_populasi' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'jumlah populasi harus diisi.',
                    'numeric' => 'isi harus angka'
                ]
            ],
            'waktu_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'waktu produksi harus diisi.'
                ]
            ],
            'biaya_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'biaya produksi harus diisi.'
                ]
            ],
            'harga_hsl_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'harga hasil produksi harus diisi.',
                    'numeric' => 'isi harus angka'
                ]
            ],
            'sistem_pemel_ternak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sistem pemeliharaan ternak harus diisi.'
                ]
            ],
            'benih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alat_teknologi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alat dan teknologi harus diisi.'
                ]
            ],
            'nama_anc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ancaman harus diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->to('peternakan/tambah')->withInput()->with('validation', $validation);
        }

        $this->peternakanModel->insert([
            'jenis_ternak' => $this->request->getVar('jenis_ternak'),
            'jml_populasi' => $this->request->getVar('jml_populasi'),
            'lama_prod' => $this->request->getVar('lama_prod'),
            'waktu_prod' => $this->request->getVar('waktu_prod'),
            'biaya_prod' => $this->request->getVar('biaya_prod'),
            'harga_hsl_prod' => $this->request->getVar('harga_hsl_prod'),
            'sistem_pemel_ternak' => $this->request->getVar('sistem_pemel_ternak'),
            'benih' => $this->request->getVar('benih'),
            'alat_teknologi' => $this->request->getVar('alat_teknologi'),
            'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
            'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
            'nama_anc' => $this->request->getVar('nama_anc'),
            'penanggulangan' => $this->request->getVar('penanggulangan'),
            'id_kom' => $this->request->getVar('id_kom'),
            'id_tp' => $this->request->getVar('id_tp'),
            // 'id_sp' => $this->request->getVar('id_sp'),
            'id_ipt' => $this->request->getVar('id_ipt'),
            'id_produsen' => $this->request->getVar('id_produsen')
        ]);

        session()->setFlashdata('pesan', 'ditambahkan.');

        return redirect()->to('/peternakan');
    }

    public function edit($id_ternak)
    {
        $data = [
            'title' => 'Edit Data Peternakan',
            'validation' => \Config\Services::validation(),
            'komoditas' => $this->komoditasModel->findAll(),
            'tempat' => $this->tempatModel->findAll(),
            'sentra' => $this->sentraModel->findAll(),
            'infrastruktur' => $this->infrasternakModel->findAll(),
            'produsen' => $this->produsenModel->findAll(),
            'peternakan' => $this->peternakanModel->find($id_ternak)
        ];
        return view('peternakan/edit', $data);
    }

    public function update($id_ternak)
    {
        // validasi input
        if (!$this->validate([
            'jenis_ternak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'jenis ternak harus diisi.'
                ]
            ],
            'jml_populasi' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'jumlah populasi harus diisi.',
                    'numeric' => 'isi harus angka'
                ]
            ],
            'waktu_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'waktu produksi harus diisi.'
                ]
            ],
            'biaya_prod' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'biaya produksi harus diisi.'
                ]
            ],
            'harga_hsl_prod' => [
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => 'harga hasil produksi harus diisi.',
                    'numeric' => 'isi harus angka'
                ]
            ],
            'sistem_pemel_ternak' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'sistem pemeliharaan ternak harus diisi.'
                ]
            ],
            'benih' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi.'
                ]
            ],
            'alat_teknologi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'alat dan teknologi harus diisi.'
                ]
            ],
            'nama_anc' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ancaman harus diisi.'
                ]
            ],

        ])) {
            $validation = \Config\Services::validation();

            return redirect()->back()->withInput()->with('validation', $validation);
        }

        $this->peternakanModel->update($id_ternak, [
            'jenis_ternak' => $this->request->getVar('jenis_ternak'),
            'jml_populasi' => $this->request->getVar('jml_populasi'),
            'lama_prod' => $this->request->getVar('lama_prod'),
            'waktu_prod' => $this->request->getVar('waktu_prod'),
            'biaya_prod' => $this->request->getVar('biaya_prod'),
            'harga_hsl_prod' => $this->request->getVar('harga_hsl_prod'),
            'sistem_pemel_ternak' => $this->request->getVar('sistem_pemel_ternak'),
            'benih' => $this->request->getVar('benih'),
            'alat_teknologi' => $this->request->getVar('alat_teknologi'),
            'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
            'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
            'nama_anc' => $this->request->getVar('nama_anc'),
            'penanggulangan' => $this->request->getVar('penanggulangan'),
            'id_kom' => $this->request->getVar('id_kom'),
            'id_tp' => $this->request->getVar('id_tp'),
            'id_sp' => $this->request->getVar('id_sp'),
            'id_ipt' => $this->request->getVar('id_ipt'),
            'id_produsen' => $this->request->getVar('id_produsen')
        ]);

        session()->setFlashdata('pesan', 'diedit.');

        return redirect()->to('/peternakan');
    }

    public function hapus($id_ternak)
    {
        $this->peternakanModel->delete($id_ternak);

        session()->setFlashdata('pesan', 'dihapus.');

        return redirect()->to('/peternakan');
    }
}
