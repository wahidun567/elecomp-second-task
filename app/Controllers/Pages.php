<?php

namespace App\Controllers;

use App\Models\PagesModel;

class Pages extends BaseController
{
    protected $pagesModel;

    public function __construct()
    {
        $this->pagesModel = new PagesModel();
    }

    public function index()
    {
        $currentPage = $this->request->getVar('page_teman') ? $this->request->getVar('page_teman') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wahid = $this->pagesModel->search($keyword);
        } else {
            $wahid = $this->pagesModel;
        }
        $data = [
            'title' => 'Bisma || Muh Nur Wahid',
            'teman' => $wahid->paginate(6, 'teman'),
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/bisma', $data);
    }


    public function create()
    {
        $data = [
            'title' => 'Form Tambah Data Pertemanan',
            'validation' => \config\Services::validation(),
            'teman' => $this->pagesModel->findAll()
        ];

        return view('aksi/createTeman', $data);
    }
    public function save()
    {

        if (!$this->validate([
            'namaTeman' => [
                'rules' => 'required|is_unique[teman.nama_teman]',
                'errors' => [
                    'required' => 'Nama Teman harus di isi !',
                    'is_unique' => 'Maaf nama teman sudah terdaftar !'
                ]
            ],
            'no_hp_teman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Handphone harus di isi !'
                ]
            ],
            'pekerjaan_teman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan harus di isi !'
                ]
            ],
            'kenalan_dari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kenalan Dari harus di isi !'
                ]
            ]

        ])) {
            return redirect()->to('/pages/create')->withInput();
        }

        $this->pagesModel->save([
            'nama_teman' => $this->request->getVar('namaTeman'),
            'no_hp_teman' => $this->request->getVar('no_hp_teman'),
            'pekerjaan_teman' => $this->request->getVar('pekerjaan_teman'),
            'kenalan_dari' => $this->request->getVar('kenalan_dari'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil ditambahkan');
        return redirect()->to('/pages/index');
    }

    public function delete($id_teman)
    {
        $this->pagesModel->delete($id_teman);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/pages');
    }

    public function edit($id_teman)
    {
        $data = [
            'title' => 'Form Ubah Data',
            'validation' => \config\Services::validation(),
            'teman' => $this->pagesModel->find($id_teman),
            'kenalan' => $this->pagesModel->findAll()
        ];
        return view('aksi/editTeman', $data);
    }

    public function update($id_teman)
    {
        if (!$this->validate([
            'namaTeman' => [
                'rules' => 'required[teman.nama_teman]',
                'errors' => [
                    'required' => 'Nama Teman harus di isi !',
                    'is_unique' => 'Maaf nama teman sudah terdaftar !'
                ]
            ],
            'no_hp_teman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'No Handphone harus di isi !'
                ]
            ],
            'pekerjaan_teman' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan harus di isi !'
                ]
            ],
            'kenalan_dari' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kenalan Dari harus di isi !'
                ]
            ]
        ])) {
            return redirect()->to('/pages/edit/' . $this->pagesModel->find($id_teman))->withInput();
        }
        $this->pagesModel->save([
            'id_teman' => $id_teman,
            'nama_teman' => $this->request->getVar('namaTeman'),
            'no_hp_teman' => $this->request->getVar('no_hp_teman'),
            'pekerjaan_teman' => $this->request->getVar('pekerjaan_teman'),
            'kenalan_dari' => $this->request->getVar('kenalan_dari'),
        ]);

        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/pages/index');
    }

    public function rava()
    {
        $currentPage = $this->request->getVar('page_teman') ? $this->request->getVar('page_teman') : 1;
        /* untuk searching */
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wahid = $this->pagesModel->search($keyword);
        } else {
            $wahid = $this->pagesModel;
        }


        $data = [
            'title' => 'Rava || Muh Nur Wahid',
            'teman' => $wahid->get(),
            'count' => $this->pagesModel,
            'temanRava' => $wahid->paginate(6, 'teman'),
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/rava', $data);
    }


    public function wahid($nama_teman)
    {
        $currentPage = $this->request->getVar('page_teman') ? $this->request->getVar('page_teman') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wahid = $this->pagesModel->search($keyword);
        } else {
            $wahid = $this->pagesModel;
        }

        $wahid = $this->pagesModel->where('kenalan_dari', $nama_teman);

        $data = [
            'title' => 'wahid | Muh Nur Wahid',
            'teman' => $wahid->paginate(6, 'teman'),
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/wahid', $data);
    }

    public function hierarki()
    {
        $currentPage = $this->request->getVar('page_teman') ? $this->request->getVar('page_teman') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wahid = $this->pagesModel->search($keyword);
        } else {
            $wahid = $this->pagesModel;
        }

        $urutan = $wahid->orderBy('nama_teman', 'ASC');

        $data = [
            'title' => 'hierarki | Muhammad Nur Wahid',
            'teman' => $urutan->paginate(6, 'teman'),
            'count' => $this->pagesModel,
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/hierarki', $data);
    }

    public function eyeHierarki($nama_teman)
    {
        $currentPage = $this->request->getVar('page_teman') ? $this->request->getVar('page_teman') : 1;
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $wahid = $this->pagesModel->search($keyword);
        } else {
            $wahid = $this->pagesModel->where('kenalan_dari', $nama_teman);
        }

        $urutan = $wahid->orderBy('nama_teman', 'ASC');

        $data = [
            'title' => 'eye Hierarki | Muhammad Nur Wahid',
            'teman' => $urutan->paginate(6, 'teman'),
            'count' => $this->pagesModel,
            'pager' => $this->pagesModel->pager,
            'currentPage' => $currentPage
        ];
        return view('pages/eyeHierarki', $data);
    }
}
