<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelSlider;

class Slider extends BaseController
{
  public function __construct()
  {
    $this->ModelSlider = new ModelSlider();
  }
  public function index()
  {

    $data = [
      'judul' => 'Slider',
      'subjudul' => 'Slider',
      'menu' => 'slider',
      'submenu' => 'slider',
      'page' => 'admin/slider/v_index',
      'slider' => $this->ModelSlider->allData(),

    ];
    return view('v_template_back', $data);
  }

  public function tambah()
  {

    $data = [
      'judul' => 'Slider',
      'subjudul' => 'Tambah Slider',
      'menu' => 'slider',
      'submenu' => 'slider',
      'page' => 'admin/slider/v_tambah',

    ];
    return view('v_template_back', $data);
  }

  public function insert()
  {
    if ($this->validate([
      'judul_slider' => [
        'label' => 'Judul Slider',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong',
        ]
      ],
      'url_terkait' => [
        'label' => 'URL Terkait',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong',
        ]
      ],
      'gambar_slider' => [
        'label' => 'Gambar Slider',
        'rules' =>
        'uploaded[gambar_slider]|max_size[gambar_slider,1000]|mime_in[gambar_slider,image/jpg,image/jpeg,image/png]',
        'error' => [
          'uploaded' => '{field} Tidak Boleh Kosong !',
          'max_size' => '{field} Maksimal Ukuran File 1000 KB !',
          'mime_in' => '{field} Harus Sesuai Format jpg,jpeg,png !',
        ]
      ]
    ])) {
      $gambar_slider = $this->request->getFile('gambar_slider');
      $nama_file = $gambar_slider->getRandomName();
      $gambar_slider->move('gambar', $nama_file);
      $data =
        [
        'judul_slider' => $this->request->getPost('judul_slider'),
        'url_terkait' => $this->request->getPost('url_terkait'),
        'gambar_slider' => $nama_file,
        ];
      $this->ModelSlider->insertData($data);
      Session()->setFlashdata('insert', 'Data Berhasil Ditambahkan!');
      return redirect()->to('Admin/Slider');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Slider/tambah')->withInput();
    }
  }


  public function delete($id_slider)
  {
    $data =
      [
        'id_slider' => $id_slider,
      ];
    $this->ModelSlider->deleteData($data);
    Session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
    return redirect()->to('Admin/Slider');
  }
}
