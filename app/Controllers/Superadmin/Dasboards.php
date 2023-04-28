<?php

namespace App\Controllers\Superadmin;

use App\Controllers\BaseController;

use App\Models\super\MenuModel;

class Dasboards extends BaseController
{
    protected $menu;
    protected $hasil;
    public function __construct()
    {
        $this->menu = new MenuModel();
        helper('uri');
        $this->hasil = $this->menu->getSuperabsen();
        $this->session = \Config\Services::session();
    }

    public function index()
    {

        //   dd($this->hasil);
        $data = [
            'menu' => $this->hasil,
        ];
        return view('superadmin/dasboardsuper', $data);
    }

    public function tambahmenu()
    {
        session();
        $menu = $this->menu->getAbsen();
        $level = $this->menu->getLevel();
        $app = $this->menu->getApp();
        // dd($levela);
        $data = [
            'menu' => $this->hasil,
            'isi' => $menu,
            'level' => $level,
            'app' => $app,
            //  'validation' => \Config\Services::validation(),
        ];
        return view('superadmin/tambahsite', $data);
    }
    public function addmenu()
    {

        $judul = $this->request->getPost('judul');
        $submenu = $this->request->getPost('submenu');
        $link = $this->request->getPost('link');
        $icon = $this->request->getPost('icon');
        $warna = $this->request->getPost('warna');
        $level = $this->request->getPost('level');
        $app = $this->request->getPost('app');
        $urut = $this->request->getPost('urut');
        $lastid = $this->menu->getIdMax($level) + 1;
        $minid = $this->menu->getIdMin($level);

        $rule = [
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong.',
                ],
            ],

            'link' => [
                'rules' => 'required|is_unique[menu.link]',
                'errors' => [
                    'required' => 'Link tidak boleh kosong.',
                    'is_unique' => 'Maaf link Sudah di gunakan',
                ],
            ],
            'icon' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Icon tidak boleh kosong.',
                ],
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna tidak boleh kosong.',
                ],
            ],
            'level' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level tidak boleh kosong.',
                ],
            ],
            'app' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'App tidak boleh kosong.',
                ],
            ],
            'urut' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Urut tidak boleh kosong.',
                ],
            ],

        ];

        $data = [
            'kdmenu' => $lastid,
            'title' => $judul,
            'submenu' => $submenu,
            'link' => $link,
            'icon' => $icon,
            'warna' => $warna,
            'status' => 1,
            'level' => $level,
            'target' => $minid,
            'app' => $app,
            'urut' => $urut,
        ];
        if (!$this->validateData($data, $rule)) {
            // print_r($this->validator->getErrors());
            $this->session->setFlashdata('errors', $this->validator->getErrors());
            //  dd($judul);
            return redirect()->back()->withInput();
        }
        $masuk = $this->menu->PostMenu($data);
        if (!$masuk) {
            session()->setFlashdata('error', 'Data Gagal disimpan.');
        } else {
            session()->setFlashdata('success', 'Data berhasil disimpan.');
        }
        return redirect()->to('/tamabahmenusite');
        //return view('superadmin/tambahsite', $data);
    }
    public function update($id)
    {
        // Lakukan sesuatu dengan $id yang diterima dari URL
        $judul = $this->request->getPost('judul');
        $submenu = $this->request->getPost('submenu');
        $link = $this->request->getPost('link');
        $icon = $this->request->getPost('icon');
        $warna = $this->request->getPost('warna');
        $level = $this->request->getPost('level');
        $app = $this->request->getPost('app');
        $urut = $this->request->getPost('urut');
        // $lastid = $this->menu->getIdMax($level) + 1;
        $minid = $this->menu->getIdMin($level);
        // dd($app);
        $rule = [
            'title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Judul tidak boleh kosong.',
                ],
            ],

            'link' => [
                'rules' => "required|is_unique[menu.link,kdmenu,{$id}]",
                'errors' => [
                    'required' => 'Link tidak boleh kosong.',
                    'is_unique' => 'Maaf link Sudah di gunakan',
                ],
            ],
            'icon' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Icon tidak boleh kosong.',
                ],
            ],
            'warna' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Warna tidak boleh kosong.',
                ],
            ],
            'level' =>  [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Level tidak boleh kosong.',
                ],
            ],
            'app' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'App tidak boleh kosong.',
                ],
            ],
            'urut' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Urut tidak boleh kosong.',
                ],
            ],

        ];
        // dd($id);
        $data = [
            //'kdmenu' => $id,
            'title' => $judul,
            'submenu' => $submenu,
            'link' => $link,
            'icon' => $icon,
            'warna' => $warna,
            'status' => 1,
            'level' => $level,
            'target' => $minid,
            'app' => $app,
            'urut' => $urut,
        ];
        if (!$this->validateData($data, $rule)) {
            // print_r($this->validator->getErrors());
            $this->session->setFlashdata('errors', $this->validator->getErrors());
            //  dd($judul);
            return redirect()->back()->withInput();
        }
        // $masuk = $this->menu->UpdateMenu($id, $data);
        // if ($masuk) {
        //     session()->setFlashdata('success', 'Data berhasil disimpan.');
        // } else {
        //     session()->setFlashdata('error', 'Data Gagal disimpan.');
        // }
        $masuk = $this->menu->UpdateMenu($id, $data);
        if ($masuk) {
            session()->setFlashdata('success', 'Data berhasil disimpan.');
        } else {
            session()->setFlashdata('error', 'Data Gagal disimpan.');
        }
        return redirect()->to('/tamabahmenusite');
        //return view('superadmin/tambahsite', $data);

    }
    public function delete($id)
    {
        $data = [
            //'kdmenu' => $id,
            'status' => 0,
        ];

        $masuk = $this->menu->deleteMenu($id, $data);
        if ($masuk) {
            session()->setFlashdata('success', 'Data berhasil dihapus.');
        } else {
            session()->setFlashdata('error', 'Data Gagal dihapus.');
        }
        return redirect()->to('/tamabahmenusite');
    }
}
