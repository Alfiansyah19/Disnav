<?php

namespace App\Controllers;
use App\Models\ModelSetting;

class Daerah extends BaseController
{
    public function __construct()
    {
        $this->ModelSetting = new ModelSetting();

    }
    public function ambon()
    {
        $data = [
            'judul' => 'Kota Ambon',
            'page' => 'v_ambon',
            'ambon' => $this->ModelSetting->detailData(),
        ];
        return view('v_template_front', $data);
    }
}
