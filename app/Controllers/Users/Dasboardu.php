<?php

namespace App\Controllers\users;

use App\Controllers\BaseController;

use App\Models\users\MenuModel;

class Dasboardu extends BaseController
{
    protected $menu;
    protected $bawah;
    public function __construct()
    {
        $this->menu = new MenuModel();
        helper('uri');
        $buton = array('status' => 1, 'target' => 20);
        $this->bawah = $this->menu->where($buton)->orderBy('kdmenu', 'ASC')->findAll();
    }

    public function index()
    {
        $seleksi = array('status' => 1, 'target' => 1);
        $hasil = $this->menu->where($seleksi)->findAll();
        $bawah = $this->bawah;
        // dd($hasil);
        $data = [
            'menu' => $hasil,
            'bawah' => $bawah,
        ];
        return view('users/dasboardUser', $data);
    }

    public function profilUser()
    {
        $bawah = $this->bawah;
        $data = [

            'bawah' => $bawah,
        ];
        return view('users/profilUser', $data);
    }
    public function camera()
    {
        $bawah = $this->bawah;
        $data = [

            'bawah' => $bawah,
        ];
        return view('users/camera', $data);
    }
}
