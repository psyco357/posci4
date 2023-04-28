<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

use App\Models\admin\ModelGet;

use App\Models\admin\MenuModel;

class Profil extends BaseController
{
    public function __construct()
    {
        $this->ambil = new ModelGet();
        $this->menu = new MenuModel();
        helper('uri');
    }
    public function profil()
    {
        $hasil = $this->ambil->Getprofil();
        //   $menu = $this->menu->
        $seleksi = array('status' => 1, 'target' => 100);
        $menu = $this->menu->where($seleksi)->findAll();
        $profil = json_decode($hasil);
        //ubah json menjadi object
        $profil = $profil[0];
        $data = [
            'menu' => $menu,
            'profil' => $profil,
        ];
        return view('admin/profil', $data);
    }
}
