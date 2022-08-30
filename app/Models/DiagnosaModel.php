<?php

namespace App\Models;

use CodeIgniter\Model;

class DiagnosaModel extends Model
{
    protected $table      = 'diagnosa';
    protected $primaryKey = 'id_diagnosa';
    protected $useTimestamps = false;
    protected $allowedFields = ['kode_penyakit', 'nama', 'umur', 'jenis_kelamin', 'persentase_cf', 'tanggal_diagnosa'];
}
