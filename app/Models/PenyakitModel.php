<?php

namespace App\Models;

use CodeIgniter\Model;

class PenyakitModel extends Model
{
    protected $table      = 'penyakit';
    protected $primaryKey = 'kode_penyakit';
    protected $useAutoIncrement = false;
    protected $useTimestamps = false;

    public function getPenyakit()
    {
        return $this->where('status', 1)->get()->getResult();
    }

    public function getPenyakitByKode($kodePenyakit)
    {
        return $this->where(['kode_penyakit' => $kodePenyakit, 'status' => 1,])->first();
    }
}
