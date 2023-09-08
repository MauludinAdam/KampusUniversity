<?php

namespace App\Controllers;

use App\Models\DosenModel;
use App\Models\UniversitasModel;

class Universitas extends BaseController
{
    protected $DosenModel;
    protected $UniversitasModel;
    public function __construct()
    {
        $this->UniversitasModel = new UniversitasModel();
        $this->DosenModel = new DosenModel();
    }

    public function mahasiswa()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $mahasiswa = $this->UniversitasModel->findAll();

        $data = [
            'judul' => 'Halaman | Mahasiswa',
            'page'  => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'submenu' => 'mahasiswa',
            'menu' => 'masterdata',
            'isi'  => 'universitas/mahasiswa',
        ];

        return view('layout/wrapper', $data);
    }

    public function createmhs()
    {
        $session = \Config\Services::session();
        helper('form');

        $data = [
            'judul' => 'Form Tambah Data Mahasiswa',
            'isi'   => 'Universitas/createmhs',
            'submenu' => 'mahasiswa',
            'menu' => 'masterdata',
        ];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'nama_mhs' => [
                    'label' => 'Nama Mahasiswa',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong dan wajib diisi',
                    ]
                ],

                'jenkel' => [
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'tgl_lahir' => [
                    'label' => 'Tanggal Lahir',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong dan Wajib diisi',
                    ]
                ],
                'nim' => [
                    'label' => 'Nim',
                    'rules' => 'required|is_unique[kampus.nim]',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong dan Wajib diisi',
                        'is_unique' => 'Nim sudah ada dan tidak boleh sama'
                    ]
                ],

                'jurusan' => [
                    'label' => 'Jurusan',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'alamat' => [
                    'label' => 'Alamat',
                    'rules' => 'required',
                    'errors' => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'foto' => [
                    'rules' => 'max_size[foto,2024]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                    'errors' => [
                        'max_size' => 'Ukuran gambar terlalu besar',
                        'is_image' => 'Yang Anda Pilih Bukan Gambar',
                        'mime_in' => 'Yang Anda Pilih Bukan Gambar',
                    ]
                ]
            ]);

            if ($input == true) {
                // Form Validasi Sukses
                $UniversitasModel = new UniversitasModel();

                // ambil gambar
                $filefoto = $this->request->getFile('foto');

                // apakah tidak ada gambar yang di upload
                if ($filefoto->getError() == 4) {
                    $namafoto = 'default.png';
                } else {

                    // generate nama gambar random
                    $namafoto = $filefoto->getRandomName();

                    // pindahka file ke folder img
                    $filefoto->move('img', $namafoto);
                }


                $slug = url_title($this->request->getVar('nama_mhs'), '-', true);
                $UniversitasModel->save([
                    'nama_mhs' => $this->request->getVar('nama_mhs'),
                    'slug' => $slug,
                    'jenkel' => $this->request->getVar('jenkel'),
                    'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                    'nim' => $this->request->getVar('nim'),
                    'jurusan' => $this->request->getVar('jurusan'),
                    'alamat' => $this->request->getVar('alamat'),
                    'foto' => $namafoto
                ]);

                $session->setFlashdata('pesan', 'Data Berhasil Di tambahkan');

                return redirect()->to('Universitas/mahasiswa');
            } else {
                // Form Validasi Gagal
                $data['validation'] = $this->validator;
            }
        }

        return view('layout/wrapper', $data);
    }

    public function deletemhs($id)
    {

        // cari gambar berdasarkan id
        $mahasiswa = $this->UniversitasModel->find($id);

        // cek jika file gambarnya default.png
        if ($mahasiswa['foto'] != 'default.png') {
        }

        $this->UniversitasModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil di hapus');

        return redirect()->to('Universitas/mahasiswa');
    }

    public function editmhs($id)
    { {

            $session = \Config\Services::session();
            $mahasiswa = $this->UniversitasModel->getId($id);

            helper('form');

            $data = [
                'judul' => 'Form Edit Data Mahasiswa',
                'mahasiswa' => $mahasiswa,
                'isi'   => 'universitas/editmhs',
                'submenu' => 'mahasiswa',
                'menu' => 'masterdata',
            ];


            if ($this->request->getMethod() == 'post') {
                $input = $this->validate([
                    'nama_mhs' => [
                        'label' => 'Nama Mahasiswa',
                        'rules' => 'required|',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'jenkel' => [
                        'label' => 'Jenis Kelamin',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Tidak Boleh Kosong',
                        ]
                    ],
                    'tgl_lahir' => [
                        'label' => 'Tangal Lahir',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'nim' => [
                        'label' => 'Nim',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'jurusan' => [
                        'label' => 'Jurusan',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],
                    'alamat' => [
                        'label' => 'Alamat',
                        'rules' => 'required',
                        'errors' => [
                            'required' => '{field} Harus Diisikan',
                        ]
                    ],

                ]);

                if ($input == true) {
                    // Form validasi Berhasil 
                    $model = new UniversitasModel();

                    $model->save([
                        'id'    => $this->request->getVar('id'),
                        'nama_mhs' => $this->request->getVar('nama_mhs'),
                        'jenkel' => $this->request->getVar('jenkel'),
                        'tgl_lahir' => $this->request->getVar('tgl_lahir'),
                        'nim' => $this->request->getVar('nim'),
                        'jurusan' => $this->request->getVar('jurusan'),
                        'alamat' => $this->request->getVar('alamat'),
                    ]);

                    $session->setFlashdata('pesan', 'Data Berhasil Di edit');

                    return redirect()->to('/Universitas/mahasiswa')->withInput();
                } else {
                    // Form Validasi Gagal

                    $data['validation'] = $this->validator;
                }
            }
            return view('layout/wrapper', $data);
        }
    }

    //  =========================== Data Dosen ================================== //

    public function dosen()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $dosen = $this->DosenModel->findAll();

        $data = [
            'judul' => 'Halaman | Data Dosen',
            'page'  => 'Data Dosen',
            'isi'   => 'universitas/dosen',
            'submenu' => 'dosen',
            'menu' => 'masterdata',
            'dosen' => $dosen
        ];

        return view('layout/wrapper', $data);
    }

    public function editdosen($id_dosen)
    {
        $session = \Config\Services::session();

        $dosen = $this->DosenModel->getIdDosen($id_dosen);
        $data = [
            'judul' => 'Form Edit Data Dosen',
            'page' => 'Edit Data Dosen',
            'isi' => 'universitas/editdosen',
            'submenu' => 'dosen',
            'menu' => 'masterdata',
            'dosen' => $dosen
        ];


        if ($this->request->getMethod() == 'post') {
            $input = $this->validate([
                'nama_dosen'   => [
                    'label'     => 'Nama Dosen',
                    'rules'     => 'required|',
                    'errors'    => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'telp' => [
                    'label'     => 'No. Telp',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => '{field} Tidak Boleh Kosong',
                    ]
                ],
                'jadwal' => [
                    'label'     => 'Jadwal',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => '{field} Harus Diisikan',
                    ]
                ],
                'email' => [
                    'label'     => 'Email',
                    'rules'     => 'required',
                    'errors'    => [
                        'required' => '{field} Harus Diisikan',
                    ]
                ],


            ]);

            if ($input == true) {
                // Form validasi Berhasil 
                $model = new DosenModel();

                $model->save([
                    'id_dosen'    => $this->request->getVar('id_dosen'),
                    'nama_dosen'     => $this->request->getVar('nama_dosen'),
                    'telp'            => $this->request->getVar('telp'),
                    'jadwal'             => $this->request->getVar('jadwal'),
                    'email'           => $this->request->getVar('email'),
                ]);

                $session->setFlashdata('pesan', 'Data Berhasil Di edit');

                return redirect()->to('/Universitas/dosen')->withInput();
            } else {
                // Form Validasi Gagal

                $data['validation'] = $this->validator;
            }
        }

        return view('layout/wrapper', $data);
    }

    //  =========================== Program Studi ================================== //


}
