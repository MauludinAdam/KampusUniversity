<?php

namespace App\Models;

use CodeIgniter\Model;

class InformasiModel extends Model
{
    protected $table = 'informasi';
    protected $primaryKey = 'id_informasi';
    protected $allowedFields = ['nama_matkul', 'hari', 'jam', 'kelas'];

    public function getIdInformasi($id_informasi)
    {
        return $this->where(['id_informasi' => $id_informasi])->first();
    }
}
