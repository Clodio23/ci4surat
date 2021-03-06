<?php

namespace App\Models;

use CodeIgniter\Model;

class jabatanModel extends Model
{
    protected $table = 'jabatan';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama_jabatan', 'kode_jabatan', 'level', 'atasan', 'uraian'];

    public function getjabatan($id = false)
    {

        if ($id == false) {

            return $this->findAll();
        }


        return $this->where(['id' => $id])->first();
    }
}
