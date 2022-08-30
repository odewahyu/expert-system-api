<?php

namespace App\Models;

use CodeIgniter\Model;

class GejalaModel extends Model
{
    protected $table      = 'gejala';
    protected $primaryKey = 'kode_gejala';
    protected $useAutoIncrement = false;
    protected $useTimestamps = false;

    public function getGejala()
    {
        return $this->where('status', '1')->get()->getResult();
    }
}
