<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Web extends BaseController
{
    public function web()
    {
        $data = [
            'judul' => 'Form',
            'page' => 'Form Input Data Mahasiswa'
        ];

        return view('v_web', $data);
    }
}
