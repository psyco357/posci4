<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class ModelGet extends Model
{
    public function GetProfil()
    {
        // $builder = $db->table('blogs');
        // $builder->select('*');
        // $builder->join('comments', 'comments.id = blogs.id');
        // $query = $builder->get();
        // Mengambil data dari tabel petugas
        $tampil = $this->db->table('transuser a');
        $tampil->select('*');
        $tampil->join('licensi b', 'b.kdlicensi=a.kdlicensi');
        $tampil->join('user c', 'c.kduser=a.kduser');
        $result = $tampil->get()->getResultObject();
        // mengubah hasil query menjadi format JSON
        $json = json_encode($result);

        return $json;
    }
}
