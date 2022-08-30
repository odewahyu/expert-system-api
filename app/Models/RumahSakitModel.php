<?php

namespace App\Models;

use CodeIgniter\Model;

class RumahSakitModel extends Model
{
    protected $table      = 'rumah_sakit';
    protected $primaryKey = 'id_rs';
    protected $useTimestamps = false;

    public function getRumahSakit()
    {
        return $this->where('status', 1)->get()->getResult();
    }

    public function getRumahSakitById($id)
    {
        return $this->where(['id_rs' => $id, 'status' => 1,])->first();
    }

    public function getSearch($keyword)
    {
        return $this->like('nama_rs', $keyword)
            ->orLike('provinsi', $keyword)
            ->get()->getResult();
    }
}
