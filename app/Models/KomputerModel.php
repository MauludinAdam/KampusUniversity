<?php

namespace App\Models;

use CodeIgniter\Model;

class KomputerModel extends Model
{
    protected $table            = 'komputer';
    protected $primaryKey       = 'id_kompuer';
    protected $allowedFields    = ['nama_matkul', 'hari', 'jam', 'kelas'];

    public function getIdKomputer($id_komputer)
    {
        return $this->where(['id_komputer' => $id_komputer])->first();
    }
}
