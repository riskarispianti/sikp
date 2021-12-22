<?php

namespace App\Controllers\Api;

use App\Models\InfrasternakModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class InfrasTernak extends ResourceController
{
  use ResponseTrait;

  public function show($id_ipt = null)
  {
    $infrasTernak = new InfrasternakModel();
    $data = $infrasTernak->find($id_ipt);

    return $this->respond($data);
  }
}
