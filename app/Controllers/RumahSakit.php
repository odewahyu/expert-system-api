<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\RumahSakitModel;

class RumahSakit extends ResourceController
{
    protected $rumahSakitModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->rumahSakitModel = new RumahSakitModel();
    }

    public function index()
    {
        $data = $this->rumahSakitModel->getRumahSakit();
        return $this->respond($data);
    }

    public function show($id = null)
    {
        $data = $this->rumahSakitModel->getRumahSakitById($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Rumah sakit tidak ditemukan');
        }
    }

    public function search($keyword = null)
    {
        $data = $this->rumahSakitModel->getSearch($keyword);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Rumah sakit tidak ditemukan');
        }
    }
}
