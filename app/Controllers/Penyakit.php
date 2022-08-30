<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PenyakitModel;

class Penyakit extends ResourceController
{
    protected $penyakitModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->penyakitModel = new PenyakitModel();
    }

    public function index()
    {
        $data = $this->penyakitModel->getPenyakit();
        return $this->respond($data);
    }

    public function show($kodePenyakit = null)
    {
        $data = $this->penyakitModel->getPenyakitByKode($kodePenyakit);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Penyakit tidak ditemukan');
        }
    }
}
