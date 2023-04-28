<?php

namespace App\Models\users;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'kdmenu';
    // protected $bawah;
    public function getSuperabsen()
    {
        $where = array(
            'status' => 1,
            'target' => 50,
            'app' => 1,
            'level' => 1,
        );

        $tampil =  $this->where($where)->orderBy('urut', 'ASC')->findAll();
        return $tampil;
    }
    public function getAbsen()
    {
        $tampil =  $this->orderBy('kdmenu', 'ASC')->findAll();
        return $tampil;
    }
}
