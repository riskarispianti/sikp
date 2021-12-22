<?php

namespace App\Controllers\Api;

use App\Models\ProdusenModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Produsen extends ResourceController
{
  use ResponseTrait;

  public function show($id_produsen = null)
  {
    $produsenModel = new ProdusenModel();
    $data = $produsenModel->find($id_produsen);

    return $this->respond($data);
  }
}
