<?php

namespace App\Models;

use CodeIgniter\Model;

class UniversitasModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mhs', 'slug', 'jenkel', 'tgl_lahir', 'nim', 'jurusan', 'alamat', 'foto'];
    protected $useTimestamps = true;

    public function getId($id)
    {
        return $this->where(['id' => $id])->first();
    }
}
