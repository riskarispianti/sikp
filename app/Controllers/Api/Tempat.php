<?php

namespace App\Controllers\Api;

use App\Models\TempatModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Tempat extends ResourceController
{
  use ResponseTrait;

  public function show($id_tp = null)
  {
    $tempatModel = new TempatModel();
    $data = $tempatModel->find($id_tp);

    return $this->respond($data);
  }
}
