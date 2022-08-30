<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\GejalaModel;

class Gejala extends ResourceController
{
    protected $gejalaModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->gejalaModel = new GejalaModel();
    }

    public function index()
    {
        $data = $this->gejalaModel->getGejala();
        return $this->respond($data);
    }
}
