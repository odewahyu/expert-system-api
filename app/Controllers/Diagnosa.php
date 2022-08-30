<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DiagnosaModel;

class Diagnosa extends ResourceController
{
    protected $diagnosaModel;

    use ResponseTrait;

    public function __construct()
    {
        $this->diagnosaModel = new DiagnosaModel();
    }

    public function index()
    {
        $data = $this->diagnosaModel->findAll();
        return $this->respond($data);
    }

    public function create()
    {
        $this->diagnosaModel->save([
            'kode_penyakit' => $this->request->getVar('kode_penyakit'),
            'nama' => $this->request->getVar('nama'),
            'umur' => $this->request->getVar('umur'),
            'jenis_kelamin' => $this->request->getVar('jenis_kelamin'),
            'persentase_cf' => $this->request->getVar('persentase_cf'),
            'tanggal_diagnosa' => $this->request->getVar('tanggal_diagnosa'),
        ]);

        $response = [
            'status_code' => 201,
            'error' => null,
            'message' => [
                'succes' => 'Create diagnosa success',
            ],
        ];

        return $this->respondCreated($response);
    }
}
