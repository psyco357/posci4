<?php

namespace App\Models\super;

use CodeIgniter\Model;

class MenuModel extends Model
{
    protected $table = 'menu';
    protected $primaryKey = 'kdmenu';
    // protected $bawah;
    public function UpdateMenu($id, $data)
    {
        $builder = $this->db->table($this->table);
        $builder->set($data);
        $builder->where($this->primaryKey, $id);
        return $builder->update();
    }
    public function deleteMenu($id, $data)
    {
        $builder = $this->db->table($this->table);
        $builder->set($data);
        $builder->where($this->primaryKey, $id);
        return $builder->update();
    }
    public function PostMenu($data)
    {
        $menu = $this->db->table($this->table);
        return $menu->insert($data);
    }
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
    public function getIdMax($id)
    {
        $where = array(
            'level' => $id,
        );
        $tampil =  $this->selectMax('kdmenu')->where($where)->get()->getRowArray()['kdmenu'];
        return $tampil;
    }
    public function getIdMin($id)
    {
        $where = array(
            'level' => $id,
        );
        $tampil =  $this->selectMin('kdmenu')->where($where)->get()->getRowArray()['kdmenu'];
        return $tampil;
    }
    public function getAbsen()
    {
        // $tampil =  $this->where($where)->orderBy('urut', 'ASC')->findAll();
        // $builder = $this->db->table($this->table);
        // $builder->orderBy('urut', 'ASC');
        // $builder->orderBy('target', 'ASC');
        // $builder->where('status', '1');
        $tampil =  $this->where('status', '1')->orderBy('target', 'ASC')->orderBy('urut', 'ASC')->findAll();
        return $tampil;
    }
    public function getLevel()
    {
        // Mengambil data dari tabel petugas
        $tampil = $this->db->table('masterlevel')->get()->getResultArray();
        return $tampil;
    }
    public function getApp()
    {
        // Mengambil data dari tabel petugas
        $tampil = $this->db->table('masterapp')->get()->getResultArray();
        return $tampil;
    }
}
