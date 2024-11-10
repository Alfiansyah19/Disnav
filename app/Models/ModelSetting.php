<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSetting extends Model
{
    public function detailData()
    {
        return $this->db->table('tbl_kantor')->where('id','1')->get()->getRowArray();
    }

    public function updateData($data)
    {
        $this->db->table('tbl_kantor')->where('id','1')->update($data);
    }

}
