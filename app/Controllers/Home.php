<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Halaman | Dashboard',
            'page'  => 'Dashboard',
            'isi'   => 'home/index',
            'menu' => 'dashboard',
            'submenu' => 'index'
        ];

        return view('layout/wrapper', $data);
    }
}
