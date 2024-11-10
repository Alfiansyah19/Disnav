<?php

namespace App\Controllers;

use App\Models\ModelWilayah;

class Wilayah extends BaseController
{
    public function __construct()
    {
        $this->ModelWilayah = new ModelWilayah();
    }
    public function detail($id_wilayah)
    {
        $data = [
            'judul' => 'Wilayah',
            'page' => 'v_wilayah_detail',
            'wilayah' => $this->ModelWilayah->detailData($id_wilayah),
        ];
        return view('v_template_front', $data);
    }
    // Pembangunan Alur Pelayanan & Perlintasan
    public function sub_detail_alur($id_wilayah)
    {
        $data = [
            'judul' => 'Pembangunan Alur Pelayanan & Perlintasan',
            'page' => 'v_sub_detail_alur',
            'alur' => $this->ModelWilayah->detailData($id_wilayah),

        ];

        return view('v_template_front', $data);
    }
    // Alur Perlintasan
    public function sub_detail_perlintasan($id_wilayah)
    {
        $data = [
            'judul' => 'Alur Perlintasan',
            'page' => 'v_alur_perlintasan',
            'perlintasan' => $this->ModelWilayah->detailData($id_wilayah),
        ];
    }
    // Alur Pelabuhan
    public function sub_detail_pelabuhan($id_wilayah)
    {
        $data = [
            'judul' => 'Alur Pelabuhan',
            'page' => 'v_alur_pelabuhan',
            'pelabuhan' => $this->ModelWilayah->detailData($id_wilayah),
        ];
    }
    // End Pembangunan Alur Pelayanan & Perlintasan

    // Sarana Bantu Navigasi Pelayanan
    public function sub_detail_sarana($id_wilayah)
    {
        $data = [
            'judul' => 'Sarana Bantu Navigasi Pelayanan',
            'page' => 'v_sub_detail_sarana',
            'sarana' => $this->ModelWilayah->detailData($id_wilayah),
        ];
        return view('v_template_front', $data);
    }
    // Rambu Suar
    public function sub_rambu_suar($id_wilayah)
    {
        $data = [
            'judul' => 'Rambu Suar',
            'page' => 'v_sub_rambu_suar',
            'rambu' => $this->ModelWilayah->detailData($id_wilayah),

        ];
        return view('v_template_front', $data);
    }
    // Pelampung Suar
    public function sub_pelampung_suar($id_wilayah)
    {
        $data = [
            'judul' => 'Pelampung Suar',
            'page' => 'v_sub_pelampung_suar',
            'pelampung' => $this->ModelWilayah->detailData($id_wilayah),

        ];
        return view('v_template_front', $data);
    }
    // Menara Suar
    public function sub_menara_suar($id_wilayah)
    {
        $data = [
            'judul' => 'Menara Suar',
            'page' => 'v_sub_menara_suar',
            'menara' => $this->ModelWilayah->detailData($id_wilayah),

        ];
        return view('v_template_front', $data);
    }
    // Tanda Suar
    public function sub_tanda_suar($id_wilayah)
    {
        $data = [
            'judul' => 'Tanda Suar',
            'page' => 'v_sub_tanda_suar',
            'tanda' => $this->ModelWilayah->detailData($id_wilayah),

        ];
        return view('v_template_front', $data);
    }
    // End Sarana Bantu Navigasi Pelayanan
    
    // Pembangunan Telekomunikasi Pelayaran
    public function sub_detail_telekom($id_wilayah)
    {
        $data = [
            'judul' => 'Pembangunan Telekomunikasi Pelayaran',
            'page' => 'v_sub_detail_telekom',
            'telekom' => $this->ModelWilayah->detailData($id_wilayah),
        ];
        return view('v_template_front', $data);
    }
    public function sub_detail_telekom_eksisting($id_wilayah)
    {
        $data = [
            'judul' => 'Eksisting',
            'page' => 'v_sub_detail_eksisting',
            'eksisting' => $this->ModelWilayah->detailData($id_wilayah),
        ];
        return view('v_template_front', $data);
    }
    // Armada Kapal Negara Kenavigasian
    public function sub_detail_armada($id_wilayah)
    {
        $data =
            [
                'judul' => 'Armada Kapal Negara Kenavigasian',
                'page' => 'v_sub_detail_armada',
                'armada' => $this->ModelWilayah->detailData($id_wilayah),
            ];
        return view('v_template_front', $data);
    }

    // Sumber Daya Manusia
    public function sub_detail_sdm($id_wilayah)
    {
        $data =
            [
                'judul' => 'Sumber Daya Alam',
                'page' => 'v_sub_detail_sdm',
                'sdm' => $this->ModelWilayah->detailData($id_wilayah),
            ];
        return view('v_template_front', $data);
    }

    // Fasilitas Penunjang
    public function sub_detail_fasilitas($id_wilayah)
    {
        $data =
            [
                'judul' => 'Fasilitas Penunjang',
                'page' => 'v_sub_detail_fasilitas',
                'fasilitas' => $this->ModelWilayah->detailData($id_wilayah),
            ];
        return view('v_template_front', $data);
    }
}
