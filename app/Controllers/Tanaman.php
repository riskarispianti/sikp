<?php

namespace App\Controllers;

use App\Models\TanamanModel;

class Tanaman extends BaseController
{
  protected $tanamanModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
  }

  public function index()
  {
    $tanaman = $this->tanamanModel->getTanam();

    $data = [
      'title' => 'Data Laporan | Ketersediaan Pangan',
      'tanaman' => $tanaman
    ];
    echo view('tanaman/data_pangan', $data);
  }

  public function detail()
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan'
    ];
    return view('tanaman/detail', $data);
  }

  public function tambah()
  {
    $data = [
      'title' => 'Detail Laporan | Ketersediaan Pangan'
    ];
    return view('tanaman/tambah', $data);
  }

  public function save()
  {
    if (!$this->validate([
      'nama_pangan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'jenis_pangan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'luas_tanam' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'luas_panen' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'produktivitas' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'jumlah_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'lama_proses' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'iklim' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'waktu_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'harga_jual' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'lahan_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'harga_jual' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'bibit' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'pupuk' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'alat_teknologi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'pemanfaatan_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'limbah_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'ancaman_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'letak_dan_luas_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'kepemilikan_dan_status_lahan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'nama_sentra_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'lokasi_sentra_produksi' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'prasarana_pengairan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'pengelolaan_jaringan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'infrastruktur_pengelolaan' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'jumah_petenai' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'pembinaan_petani' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'kelembagaan_petani' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
      'kesejahteraan_petani' => [
        'rules' => 'required',
        'errors' => [
          'required' => '{field} Harus diisi'
        ]
      ],
    ])) {
      session()->setFlashdata('error', $this->validator->listErrors());
      return redirect()->back()->withInput();
    }

    $this->tanaman_pangan->insert([
      'nama_pangan' => $this->request->getVar('nama_pangan'),
      'jenis_pangan' => $this->request->getVar('jenis_pangan'),
      'luas_tanam' => $this->request->getVar('luas_tanam'),
      'luas_panen' => $this->request->getVar('luas_panen'),
      'produktivitas' => $this->request->getVar('produktivitas'),
      'jumlah_produksi' => $this->request->getVar('jumlah_produksi'),
      'lama_proses' => $this->request->getVar('lama_proses'),
      'iklim' => $this->request->getVar('iklim'),
      'waktu_produksi' => $this->request->getVar('waktu_produksi'),
      'harga_jual' => $this->request->getVar('harga_jual'),
      'lahan_produksi' => $this->request->getVar('lahan_produksi'),
      'sumber_pengairan' => $this->request->getVar('sumber_pengairan'),
      'bibit' => $this->request->getVar('bibir'),
      'pupuk' => $this->request->getVar('pupuk'),
      'alat_teknologi' => $this->request->getVar('alat_teknologi'),
      'pemanfaatan_produksi' => $this->request->getVar('pemanfaatan_produksi'),
      'limbah_produksi' => $this->request->getVar('limbah_produksi'),
      'ancaman_produksi' => $this->request->getVar('ancaman_produksi'),
      'letak_dan_luas_produksi' => $this->request->getVar('letak_dan_luas_produksi'),
      'kepemilikan_dan_status_lahan' => $this->request->getVar('kepemilikan_dan_status_lahan'),
      'nama_sentra_produksi' => $this->request->getVar('nama_sentra_produksi'),
      'lokasi_sentra_produksi' => $this->request->getVar('lokasi_sentra_produksi'),
      'prasarana_pengairan' => $this->request->getVar('prasarana_pengairan'),
      'pengelolaan_jaringan' => $this->request->getVar('pengelolaan_jaringan'),
      'infrastruktur_pengelolaan' => $this->request->getVar('infrastruktur_pengelolaan'),
      'jumlah_petani' => $this->request->getVar('jumlah_petani'),
      'pembinaan_petani' => $this->request->getVar('pembinaan_petani'),
      'kelembagaan_petani' => $this->request->getVar('kelembagaan_petani'),
      'kesejahteraan_petani' => $this->request->getVar('kesejahteraan_petani')
    ]);
    session()->setFlashdata('message', 'Tambah Data Tanaman Pangan Berhasil');
    return redirect()->to('/tanaman');
  }
}
