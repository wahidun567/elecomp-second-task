<?php

namespace App\Models;

use CodeIgniter\Model;

class PagesModel extends Model
{
    protected $table = 'teman';
    protected $primaryKey = 'id_teman';
    protected $allowedFields = ['nama_teman', 'no_hp_teman', 'pekerjaan_teman','kenalan_dari'];


    public function search($keyword)
    {
        return $this->table('teman')->like('nama_teman', $keyword)->orLike('pekerjaan_teman', $keyword)->orlike('no_hp_teman', $keyword);
    }


    /* detail */
//     public function detail($kenalan)
//     {
//         return $this->table('teman')->where('kenalan_dari', $kenalan);
//     }
// 
}
