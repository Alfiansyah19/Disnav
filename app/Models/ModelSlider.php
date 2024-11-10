<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSlider extends Model
{
    public function allData()
    {
        return $this->db->table('tbl_slider')->get()->getResultArray();
    }

    public function detailData($id_slider)
    {
        return $this->db->table('tbl_slider')->where('id_slider',$id_slider)->get()->getResultArray();
    }

    public function insertData($data)
    {
        $this->db->table('tbl_slider')->insert($data);
    }

    public function updateData($data)
    {
        $this->db->table('tbl_slider')->where('id_slider', $data['id_slider'])->update($data);
    }

    public function deleteData($data)
    {
        $this->db->table('tbl_slider')->where('id_slider', $data['id_slider'])->delete($data);
    }
}
