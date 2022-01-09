<?php

namespace App\Controllers;

use App\Models\TanamanModel;
use App\Models\InfrastrukturModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
// use App\Models\SentraModel;
use App\Models\TempatModel;

class Tanaman extends BaseController
{
  protected $tanamanModel;
  protected $infrastrukturModel;
  protected $komoditasModel;
  protected $produsenModel;
  // protected $sentraModel;
  protected $tempatModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
    $this->infrastrukturModel = new InfrastrukturModel();
    $this->komoditasModel = new KomoditasModel();
    $this->produsenModel = new ProdusenModel();
    // $this->sentraModel = new SentraModel();
    $this->tempatModel = new TempatModel();
  }

  public function index()
  {
    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam()
    ];
    echo view('tanaman/data_pangan', $data);
  }

  public function detail($id_tanam)
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam)
    ];
    return view('tanaman/detail', $data);
  }

  public function detail_home($id_tanam)
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam)
    ];
    return view('tanaman/detail_home', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Tambah Data Tanaman Pangan',
      'validation' => \Config\Services::validation(),
      'komoditas' => $this->komoditasModel->getTan('g_kom'),
      'tempat' => $this->tempatModel->getTempat(),
      // 'sentra' => $this->sentraModel->findAll(),
      'infrastruktur' => $this->infrastrukturModel->findAll(),
      'produsen' => $this->produsenModel->findAll()
    ];
    return view('tanaman/tambah', $data);
  }

  public function save()
  {
    // validasi input
    if (!$this->validate([
      'ls_tanam' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas tanam harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'ls_panen' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas panen harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'produktivitas' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'produktivitas harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'jml_prod' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'jumlah produksi harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'lama_proses_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'lama proses produksi harus diisi.'
        ]
      ],
      'perk_iklim' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'perkiraan iklim harus diisi.'
        ]
      ],
      'perk_tanam_panen' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'musim tanam dan panen iklim harus diisi.'
        ]
      ],
      'biaya_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'biaya produksi harus diisi.'
        ]
      ],
      'harga_jual_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harga jual produksi harus diisi.'
        ]
      ],
      'alat_teknologi' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'alat dan teknologi harus diisi.'
        ]
      ],

    ])) {
      return redirect()->to('tanaman/tambah')->withInput();
    }

    $this->tanamanModel->insert([
      'jenis_tanam' => $this->request->getVar('jenis_tanam'),
      'ls_tanam' => $this->request->getVar('ls_tanam'),
      'ls_panen' => $this->request->getVar('ls_panen'),
      'produktivitas' => $this->request->getVar('produktivitas'),
      'jml_prod' => $this->request->getVar('jml_prod'),
      'lama_proses_prod' => $this->request->getVar('lama_proses_prod'),
      'perk_iklim' => $this->request->getVar('perk_iklim'),
      'perk_tanam_panen' => $this->request->getVar('perk_tanam_panen'),
      'biaya_prod' => $this->request->getVar('biaya_prod'),
      'harga_jual_prod' => $this->request->getVar('harga_jual_prod'),
      'lahan_prod' => $this->request->getVar('lahan_prod'),
      'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
      'bibit' => $this->request->getVar('bibit'),
      'pupuk' => $this->request->getVar('pupuk'),
      'alat_teknologi' => $this->request->getVar('alat_teknologi'),
      'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
      'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
      'nama_anc' => $this->request->getVar('nama_anc'),
      'penanggulangan' => $this->request->getVar('penanggulangan'),
      'id_kom' => $this->request->getVar('id_kom'),
      'id_tp' => $this->request->getVar('id_tp'),
      // 'id_sp' => $this->request->getVar('id_sp'),
      'id_ip' => $this->request->getVar('id_ip'),
      'id_produsen' => $this->request->getVar('id_produsen')
    ]);

    session()->setFlashdata('pesan', 'ditambahkan.');

    return redirect()->to('/tanaman');
  }

  public function edit($id_tanam)
  {
    $data = [
      'title' => 'Edit Data Tanaman Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam),
      'validation' => \Config\Services::validation(),
      'komoditas' => $this->komoditasModel->getTan('g_kom'),
      'tempat' => $this->tempatModel->getTempat(),
      // 'sentra' => $this->sentraModel->findAll(),
      'infrastruktur' => $this->infrastrukturModel->findAll(),
      'produsen' => $this->produsenModel->findAll()
    ];
    return view('tanaman/edit', $data);
  }

  public function edit_detail($id_tanam)
  {
    $data = [
      'title' => 'Edit Data Tanaman Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam),
      'validation' => \Config\Services::validation(),
      'komoditas' => $this->komoditasModel->getTan('g_kom'),
      'tempat' => $this->tempatModel->getTempat(),
      // 'sentra' => $this->sentraModel->findAll(),
      'infrastruktur' => $this->infrastrukturModel->findAll(),
      'produsen' => $this->produsenModel->findAll()
    ];
    return view('tanaman/edit_detail', $data);
  }

  public function edit_detail_home($id_tanam)
  {
    $data = [
      'title' => 'Edit Data Tanaman Pangan',
      'tanaman' => $this->tanamanModel->getTanam($id_tanam),
      'validation' => \Config\Services::validation(),
      'komoditas' => $this->komoditasModel->getTan('g_kom'),
      'tempat' => $this->tempatModel->getTempat(),
      // 'sentra' => $this->sentraModel->findAll(),
      'infrastruktur' => $this->infrastrukturModel->findAll(),
      'produsen' => $this->produsenModel->findAll()
    ];
    return view('tanaman/edit_detail_home', $data);
  }

  public function update($id_tanam)
  {
    // validasi input
    if (!$this->validate([
      'ls_tanam' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas tanam harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'ls_panen' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas panen harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'produktivitas' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'produktivitas harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'jml_prod' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'jumlah produksi harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'lama_proses_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'lama proses produksi harus diisi.'
        ]
      ],
      'perk_iklim' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'perkiraan iklim harus diisi.'
        ]
      ],
      'perk_tanam_panen' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'musim tanam dan panen iklim harus diisi.'
        ]
      ],
      'biaya_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'biaya produksi harus diisi.'
        ]
      ],
      'harga_jual_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harga jual produksi harus diisi.'
        ]
      ],
      'alat_teknologi' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'alat dan teknologi harus diisi.'
        ]
      ],

    ])) {
      return redirect()->back()->withInput();
    }

    $this->tanamanModel->update($id_tanam, [
      'jenis_tanam' => $this->request->getVar('jenis_tanam'),
      'ls_tanam' => $this->request->getVar('ls_tanam'),
      'ls_panen' => $this->request->getVar('ls_panen'),
      'produktivitas' => $this->request->getVar('produktivitas'),
      'jml_prod' => $this->request->getVar('jml_prod'),
      'lama_proses_prod' => $this->request->getVar('lama_proses_prod'),
      'perk_iklim' => $this->request->getVar('perk_iklim'),
      'perk_tanam_panen' => $this->request->getVar('perk_tanam_panen'),
      'biaya_prod' => $this->request->getVar('biaya_prod'),
      'harga_jual_prod' => $this->request->getVar('harga_jual_prod'),
      'lahan_prod' => $this->request->getVar('lahan_prod'),
      'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
      'bibit' => $this->request->getVar('bibit'),
      'pupuk' => $this->request->getVar('pupuk'),
      'alat_teknologi' => $this->request->getVar('alat_teknologi'),
      'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
      'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
      'nama_anc' => $this->request->getVar('nama_anc'),
      'penanggulangan' => $this->request->getVar('penanggulangan'),
      'id_kom' => $this->request->getVar('id_kom'),
      'id_tp' => $this->request->getVar('id_tp'),
      // 'id_sp' => $this->request->getVar('id_sp'),
      'id_ip' => $this->request->getVar('id_ip'),
      'id_produsen' => $this->request->getVar('id_produsen')
    ]);

    session()->setFlashdata('pesan', 'diubah.');

    return redirect()->to('/tanaman');
  }
  public function update_detail($id_tanam)
  {
    // validasi input
    if (!$this->validate([
      'ls_tanam' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas tanam harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'ls_panen' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas panen harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'produktivitas' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'produktivitas harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'jml_prod' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'jumlah produksi harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'lama_proses_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'lama proses produksi harus diisi.'
        ]
      ],
      'perk_iklim' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'perkiraan iklim harus diisi.'
        ]
      ],
      'perk_tanam_panen' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'musim tanam dan panen iklim harus diisi.'
        ]
      ],
      'biaya_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'biaya produksi harus diisi.'
        ]
      ],
      'harga_jual_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harga jual produksi harus diisi.'
        ]
      ],
      'alat_teknologi' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'alat dan teknologi harus diisi.'
        ]
      ],

    ])) {
      return redirect()->back()->withInput();
    }

    $this->tanamanModel->update($id_tanam, [
      'jenis_tanam' => $this->request->getVar('jenis_tanam'),
      'ls_tanam' => $this->request->getVar('ls_tanam'),
      'ls_panen' => $this->request->getVar('ls_panen'),
      'produktivitas' => $this->request->getVar('produktivitas'),
      'jml_prod' => $this->request->getVar('jml_prod'),
      'lama_proses_prod' => $this->request->getVar('lama_proses_prod'),
      'perk_iklim' => $this->request->getVar('perk_iklim'),
      'perk_tanam_panen' => $this->request->getVar('perk_tanam_panen'),
      'biaya_prod' => $this->request->getVar('biaya_prod'),
      'harga_jual_prod' => $this->request->getVar('harga_jual_prod'),
      'lahan_prod' => $this->request->getVar('lahan_prod'),
      'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
      'bibit' => $this->request->getVar('bibit'),
      'pupuk' => $this->request->getVar('pupuk'),
      'alat_teknologi' => $this->request->getVar('alat_teknologi'),
      'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
      'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
      'nama_anc' => $this->request->getVar('nama_anc'),
      'penanggulangan' => $this->request->getVar('penanggulangan'),
      'id_kom' => $this->request->getVar('id_kom'),
      'id_tp' => $this->request->getVar('id_tp'),
      // 'id_sp' => $this->request->getVar('id_sp'),
      'id_ip' => $this->request->getVar('id_ip'),
      'id_produsen' => $this->request->getVar('id_produsen')
    ]);

    session()->setFlashdata('pesan', 'diubah.');

    return redirect()->to('/tanaman/detail/' . $id_tanam);
  }
  public function update_detail_home($id_tanam)
  {
    // validasi input
    if (!$this->validate([
      'ls_tanam' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas tanam harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'ls_panen' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'luas panen harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'produktivitas' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'produktivitas harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'jml_prod' => [
        'rules' => 'required|numeric',
        'errors' => [
          'required' => 'jumlah produksi harus diisi.',
          'numeric' => 'isi harus angka'
        ]
      ],
      'lama_proses_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'lama proses produksi harus diisi.'
        ]
      ],
      'perk_iklim' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'perkiraan iklim harus diisi.'
        ]
      ],
      'perk_tanam_panen' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'musim tanam dan panen iklim harus diisi.'
        ]
      ],
      'biaya_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'biaya produksi harus diisi.'
        ]
      ],
      'harga_jual_prod' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'harga jual produksi harus diisi.'
        ]
      ],
      'alat_teknologi' => [
        'rules' => 'required',
        'errors' => [
          'required' => 'alat dan teknologi harus diisi.'
        ]
      ],

    ])) {
      return redirect()->back()->withInput();
    }

    $this->tanamanModel->update($id_tanam, [
      'jenis_tanam' => $this->request->getVar('jenis_tanam'),
      'ls_tanam' => $this->request->getVar('ls_tanam'),
      'ls_panen' => $this->request->getVar('ls_panen'),
      'produktivitas' => $this->request->getVar('produktivitas'),
      'jml_prod' => $this->request->getVar('jml_prod'),
      'lama_proses_prod' => $this->request->getVar('lama_proses_prod'),
      'perk_iklim' => $this->request->getVar('perk_iklim'),
      'perk_tanam_panen' => $this->request->getVar('perk_tanam_panen'),
      'biaya_prod' => $this->request->getVar('biaya_prod'),
      'harga_jual_prod' => $this->request->getVar('harga_jual_prod'),
      'lahan_prod' => $this->request->getVar('lahan_prod'),
      'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
      'bibit' => $this->request->getVar('bibit'),
      'pupuk' => $this->request->getVar('pupuk'),
      'alat_teknologi' => $this->request->getVar('alat_teknologi'),
      'peman_hsl_prod' => $this->request->getVar('peman_hsl_prod'),
      'limbah_hsl_prod' => $this->request->getVar('limbah_hsl_prod'),
      'nama_anc' => $this->request->getVar('nama_anc'),
      'penanggulangan' => $this->request->getVar('penanggulangan'),
      'id_kom' => $this->request->getVar('id_kom'),
      'id_tp' => $this->request->getVar('id_tp'),
      // 'id_sp' => $this->request->getVar('id_sp'),
      'id_ip' => $this->request->getVar('id_ip'),
      'id_produsen' => $this->request->getVar('id_produsen')
    ]);

    session()->setFlashdata('pesan', 'diubah.');

    return redirect()->to('/tanaman/detail_home/' . $id_tanam);
  }

  public function hapus($id_tanam)
  {
    $this->tanamanModel->delete($id_tanam);

    session()->setFlashdata('pesan', 'dihapus.');

    return redirect()->to('/tanaman');
  }
}
