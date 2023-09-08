<?php

namespace App\Controllers;

use App\Models\InformasiModel;
use App\Models\InformatikaModel;
use App\Models\KomputerModel;

class Prodi extends BaseController
{
    protected $KomputerModel;
    protected $InformasiModel;
    protected $InformatikaModel;
    public function __construct()
    {
        $this->InformasiModel   = new InformasiModel();
        $this->InformatikaModel = new InformatikaModel();
        $this->KomputerModel    = new KomputerModel();
    }
    public function informasi()
    {

        $session = \Config\Services::session();
        $data['session'] = $session;

        $informasi = $this->InformasiModel->findAll();

        $data = [
            'judul' => 'Halaman | Sistem Informasi',
            'page'  => 'Jadwal Mata kuliah Sistem Informasi',
            'isi'   => 'prodi/informasi',
            'submenu' => 'informasi',
            'menu' => 'prodi',
            'informasi' => $informasi
        ];

        return view('layout/wrapper', $data);
    }

    public function editinformasi($id_informasi)
    { {

            $session = \Config\Services::session();

            $informasi = $this->InformasiModel->getIdInformasi($id_informasi);
            helper('form');

            $data = [
                'judul'         => 'Form Edit Data Mahasiswa',
                'page'          => 'Edit Data Mata Kuliah Sistem Informasi',
                'isi'           => 'prodi/editinformasi',
                'informasi'     => $informasi,
                'submenu'       => 'informasi',
                'menu'          => 'prodi',

            ];


            if ($this->request->getMethod() == 'post') {
                $input = $this->validate([
                    'nama_matkul'   => [
                        'label'     => 'Nama Mata Kuliah',
                        'rules'     => 'required|',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'hari' => [
                        'label'     => 'Hari',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jam' => [
                        'label'     => 'Jam',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'kelas' => [
                        'label'     => 'Kelas',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],


                ]);

                if ($input == true) {
                    // Form validasi Berhasil 
                    $model = new InformasiModel();

                    $model->save([
                        'id_informasi'    => $this->request->getVar('id_informasi'),
                        'nama_matkul'     => $this->request->getVar('nama_matkul'),
                        'hari'            => $this->request->getVar('hari'),
                        'jam'             => $this->request->getVar('jam'),
                        'kelas'           => $this->request->getVar('kelas'),
                    ]);

                    $session->setFlashdata('pesan', 'Data Berhasil Di edit');

                    return redirect()->to('/Prodi/informasi')->withInput();
                } else {
                    // Form Validasi Gagal

                    $data['validation'] = $this->validator;
                }
            }
            return view('layout/wrapper', $data);
        }
    }
    public function cetakmatkul()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $informasi = $this->InformasiModel->findAll();

        $data = [
            'judul' => 'Halaman | Sistem Informasi',
            'page'  => 'Jadwal Mata kuliah Sistem Informasi',
            'isi'   => 'prodi/cetakmatkul',
            'submenu' => 'informasi',
            'menu' => 'prodi',
            'informasi' => $informasi

        ];

        return view('layout/wrapper', $data);
    }

    public function informatika()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $informatika = $this->InformatikaModel->findAll();

        $data = [
            'judul' => 'Halaman | Teknik Informatika',
            'page'  => 'Jadwal Mata kuliah Teknik Informatika',
            'isi'   => 'prodi/informatika',
            'submenu' => 'informatika',
            'menu' => 'prodi',
            'informatika' => $informatika

        ];

        return view('layout/wrapper', $data);
    }

    public function editinformatika($id_informatika)
    { {

            $session = \Config\Services::session();

            $informatika = $this->InformatikaModel->getIdInformatika($id_informatika);
            helper('form');

            $data = [
                'judul'         => 'Form Edit Mata Kuliah Informatika',
                'page'          => 'Edit Mata Kuliah Teknik Informatika',
                'isi'           => 'prodi/editinformatika',
                'informatika'     => $informatika,
                'submenu'       => 'informatika',
                'menu'          => 'prodi',

            ];


            if ($this->request->getMethod() == 'post') {
                $input = $this->validate([
                    'nama_matkul'   => [
                        'label'     => 'Nama Mata Kuliah',
                        'rules'     => 'required|',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'hari' => [
                        'label'     => 'Hari',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jam' => [
                        'label'     => 'Jam',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'kelas' => [
                        'label'     => 'Kelas',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],


                ]);

                if ($input == true) {
                    // Form validasi Berhasil 
                    $model = new InformatikaModel();

                    $model->save([
                        'id_informatika'    => $this->request->getVar('id_informatika'),
                        'nama_matkul'     => $this->request->getVar('nama_matkul'),
                        'hari'            => $this->request->getVar('hari'),
                        'jam'             => $this->request->getVar('jam'),
                        'kelas'           => $this->request->getVar('kelas'),
                    ]);

                    $session->setFlashdata('pesan', 'Data Berhasil Di edit');

                    return redirect()->to('/Prodi/informatika')->withInput();
                } else {
                    // Form Validasi Gagal

                    $data['validation'] = $this->validator;
                }
            }
            return view('layout/wrapper', $data);
        }
    }

    public function cetakinformatika()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $informatika = $this->InformatikaModel->findAll();

        $data = [
            'judul'         => 'Halaman | Teknik Informtaika',
            'page'          => 'Jadwal Mata kuliah Teknik Informatika',
            'isi'           => 'prodi/cetakinformatika',
            'submenu'       => 'informatika',
            'menu'          => 'prodi',
            'informatika'   => $informatika

        ];

        return view('layout/wrapper', $data);
    }

    public function komputer()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $komputer = $this->KomputerModel->findAll();

        $data = [
            'judul'         => 'Halaman | Teknik Komputer',
            'page'          => 'Jadwal Mata Kuliah Ilmu Komputer',
            'isi'           => 'prodi/komputer',
            'submenu'       => 'komputer',
            'menu'          => 'prodi',
            'komputer'      => $komputer
        ];

        return view('layout/wrapper', $data);
    }

    public function editkomputer($id_komputer)
    { {

            $session = \Config\Services::session();

            $komputer = $this->KomputerModel->getIdKomputer($id_komputer);
            helper('form');

            $data = [
                'judul'         => 'Form Edit Mata Kuliah Ilmu Komputer',
                'page'          => 'Edit Mata Kuliah Ilmu Komputer',
                'isi'           => 'prodi/editkomputer',
                'komputer'     => $komputer,
                'submenu'       => 'komputer',
                'menu'          => 'prodi',

            ];


            if ($this->request->getMethod() == 'post') {
                $input = $this->validate([
                    'nama_matkul'   => [
                        'label'     => 'Nama Mata Kuliah',
                        'rules'     => 'required|',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'hari' => [
                        'label'     => 'Hari',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jam' => [
                        'label'     => 'Jam',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'kelas' => [
                        'label'     => 'Kelas',
                        'rules'     => 'required',
                        'errors'    => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],


                ]);

                if ($input == true) {
                    // Form validasi Berhasil 
                    $model = new InformatikaModel();

                    $model->save([
                        'id_komputer'    => $this->request->getVar('id_komputer'),
                        'nama_matkul'     => $this->request->getVar('nama_matkul'),
                        'hari'            => $this->request->getVar('hari'),
                        'jam'             => $this->request->getVar('jam'),
                        'kelas'           => $this->request->getVar('kelas'),
                    ]);

                    $session->setFlashdata('pesan', 'Data Berhasil Di edit');

                    return redirect()->to('/Prodi/komputer')->withInput();
                } else {
                    // Form Validasi Gagal

                    $data['validation'] = $this->validator;
                }
            }
            return view('layout/wrapper', $data);
        }
    }

    public function cetakkomputer()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $komputer = $this->KomputerModel->findAll();

        $data = [
            'judul'         => 'Halaman | Teknik Informtaika',
            'page'          => 'Jadwal Mata kuliah Ilmu komputer',
            'isi'           => 'prodi/cetakkomputer',
            'submenu'       => 'informatika',
            'menu'          => 'prodi',
            'komputer'   => $komputer

        ];

        return view('layout/wrapper', $data);
    }
}
