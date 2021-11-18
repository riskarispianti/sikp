<?php

namespace App\Controllers;

use App\Models\TanamanModel;
use App\Models\AncamanModel;
use App\Models\InfrastrukturModel;
use App\Models\KomoditasModel;
use App\Models\ProdusenModel;
use App\Models\SentraModel;
use App\Models\TempatModel;

class Tanaman extends BaseController
{
  protected $tanamanModel;
  protected $ancamanModel;
  protected $infrastrukturModel;
  protected $komoditasModel;
  protected $produsenModel;
  protected $sentraModel;
  protected $tempatModel;

  public function __construct()
  {
    $this->tanamanModel = new TanamanModel();
    $this->ancamanModel = new AncamanModel();
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
  public function tambah()
  {
    $data = [
      'title' => 'Tambah Data Tanaman Pangan',
    ];
    return view('tanaman/tambah', $data);
  }
  public function save()
  {
    $this->tanamanModel->save([
      // [
      //   'komoditas' => $this->request->getVar('komoditas')
      // ],
      'id_kom' => $this->request->getVar('komoditas'),
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

      // [
      //   'nama_anc' => $this->request->getVar('nama_anc'),
      //   'penanggulangan' => $this->request->getVar('penanggulangan'),
      // ],
      // [
      //   'letak_prod' => $this->request->getVar('letak_prod'),
      //   'luas_prod' => $this->request->getVar('luas_prod'),
      //   'kepemilikan' => $this->request->getVar('kepemilikan'),
      //   'status_lahan' => $this->request->getVar('status_lahan')
      // ],
      // [
      //   'nama_sp' => $this->request->getVar('nama_sp'),
      //   'kecamatan' => $this->request->getVar('kecamatan'),
      //   'kelurahan' => $this->request->getVar('kelurahan')
      // ],
      // [
      //   'sarana_pengairan' => $this->request->getVar('sarana_pengairan'),
      //   'pengel_jar_irigasi' => $this->request->getVar('pengel_jar_irigasi'),
      //   'infras_pengel_air' => $this->request->getVar('infras_pengel_air')
      // ],
      // [
      //   'jml_penghasil_kom' => $this->request->getVar('jml_penghasil_kom'),
      //   'pembinaan' => $this->request->getVar('pembinaan'),
      //   'kelembagaan' => $this->request->getVar('kelembagaan'),
      //   'kesejahteraan' => $this->request->getVar('kesejahteraan')
      // ]
    ]);

    return redirect()->to('/tanaman');
  }
}
