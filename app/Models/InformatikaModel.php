<?php

namespace App\Models;

use CodeIgniter\Model;

class InformatikaModel extends Model
{
    protected $table        = 'informatika';
    protected $primaryKey   = 'id_informatika';
    protected $allowedFields = ['nama_matkul', 'hari', 'jam', 'kelas'];

    public function getIdInformatika($id_informatika)
    {
        return $this->where(['id_informatika' => $id_informatika])->first();
    }
}
