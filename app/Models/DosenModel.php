<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table = 'dosen';
    protected $primaryKey = 'id_dosen';
    protected $allowedFields = ['nama_dosen', 'telp', 'jadwal', 'emali'];

    public function getIdDosen($id_dosen)
    {
        return $this->where(['id_dosen' => $id_dosen])->first();
    }
}
