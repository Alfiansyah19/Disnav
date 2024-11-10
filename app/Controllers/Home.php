<?php

namespace App\Controllers;

use App\Models\ModelSlider;
use App\Models\ModelWilayah;


class Home extends BaseController
{
    public function __construct()
    {
        $this->ModelSlider = new ModelSlider();
        $this->ModelWilayah = new ModelWilayah();

    }
    public function index()
    {
        $data = [
            'judul' => 'Home',
            'page' => 'v_home',
            'slider' => $this->ModelSlider->allData(),
            'wilayah' => $this->ModelWilayah->allData(),
        ];
        return view('v_template_front', $data);
    }
}
