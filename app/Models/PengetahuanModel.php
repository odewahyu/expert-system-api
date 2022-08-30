<?php

namespace App\Models;

use CodeIgniter\Model;

class PengetahuanModel extends Model
{
    protected $table      = 'pengetahuan';
    protected $primaryKey = 'id_pengetahuan';
    protected $useTimestamps = false;
}
