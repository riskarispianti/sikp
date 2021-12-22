<?php

namespace App\Controllers\Api;

use App\Models\InfrastrukturModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;

class Infrastruktur extends ResourceController
{
  use ResponseTrait;

  public function show($id_ip = null)
  {
    $infrasModel = new InfrastrukturModel();
    $data = $infrasModel->find($id_ip);

    return $this->respond($data);
  }
}
