<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWilayah extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_wilayah')->get()->getResultArray();
    }

    public function detailData($id_wilayah)
    {
        return $this->db->table('tbl_wilayah')->where('id_wilayah',$id_wilayah)->get()->getRowArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_wilayah')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_wilayah')->where('id_wilayah', $data['id_wilayah'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_wilayah')->where('id_wilayah', $data['id_wilayah'])->delete($data);
    }
}
