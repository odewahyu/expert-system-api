<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PengetahuanModel;

class Pengetahuan extends ResourceController
{
    protected $pengetahuanModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->pengetahuanModel = new PengetahuanModel();
    }

    public function index()
    {
        $data = $this->pengetahuanModel->findAll();
        return $this->respond($data);
    }
}
