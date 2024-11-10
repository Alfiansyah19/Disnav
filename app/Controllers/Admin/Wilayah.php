<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelWilayah;

class Wilayah extends BaseController
{
  public function __construct()
  {
    $this->ModelWilayah = new ModelWilayah();
  }
  public function index()
  {

    $data = [
      'judul' => 'Wilayah',
      'subjudul' => 'Wilayah',
      'menu' => 'wilayah',
      'submenu' => 'wilayah',
      'page' => 'admin/wilayah/v_index',
      'wilayah' => $this->ModelWilayah->allData(),

    ];
    return view('v_template_back', $data);
  }

  public function tambah()
  {

    $data = [
      'judul' => 'Wilayah',
      'subjudul' => 'Wilayah',
      'menu' => 'wilayah',
      'submenu' => 'wilayah',
      'page' => 'admin/wilayah/v_tambah',

    ];
    return view('v_template_back', $data);
  }

  public function insert()
  {
    if ($this->validate([
      'nama_wilayah' => [
        'label' => 'Nama Wilayah',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong',
        ]
      ],
      'gambar_wilayah' => [
        'label' => 'Gambar Wilayah',
        'rules' =>
        'uploaded[gambar_wilayah]|max_size[gambar_wilayah,250]|mime_in[gambar_wilayah,image/jpg,image/jpeg,image/png]',
        'error' => [
          'uploaded' => '{field} Tidak Boleh Kosong !',
          'max_size' => '{field} Maksimal Ukuran File 250 KB !',
          'mime_in' => '{field} Harus Sesuai Format jpg,jpeg,png !',
        ]
      ]
    ])) {
      $gambar_wilayah = $this->request->getFile('gambar_wilayah');
      $nama_file = $gambar_wilayah->getRandomName();
      $gambar_wilayah->move('gambar', $nama_file);
      $data =
        [
        'nama_wilayah' => $this->request->getPost('nama_wilayah'),
        'gambar_wilayah' => $nama_file,
        ];
      $this->ModelWilayah->insertData($data);
      Session()->setFlashdata('insert', 'Data Berhasil Ditambahkan!');
      return redirect()->to('Admin/Wilayah');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Wilayah/tambah')->withInput();
    }
  }

  public function edit($id_wilayah)
  {

    $data = [
      'judul' => 'Wilayah',
      'subjudul' => ' Wilayah',
      'menu' => 'wilayah',
      'submenu' => 'wilayah',
      'page' => 'admin/wilayah/v_edit',
      'wilayah' => $this->ModelWilayah->detailData($id_wilayah)

    ];
    return view('v_template_back', $data);
  }
  public function update($id_wilayah)
  {
    if ($this->validate([
      'nama_wilayah' => [
        'label' => 'Nama Wilayah',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong',
        ]
      ],
      'gambar_wilayah' => [
        'label' => 'Gambar Wilayah',
        'rules' => 'max_size[gambar_wilayah,1000]|mime_in[gambar_wilayah,image/jpg,image/jpeg,image/png]',
        'error' => [
          'max_size' => '{field} Maksimal Ukuran File 1000 KB !',
          'mime_in' => '{field} Harus Sesuai Format jpg,jpeg,png !',
        ]
      ]
    ])) {
      $wilayah = $this->ModelWilayah->detailData($id_wilayah);
      $gambar_wilayah = $this->request->getFile('gambar_wilayah');
      if ($gambar_wilayah->getError() == 4) {
        # Jika Tidak Ganti Gambar
        $nama_file = $wilayah['gambar_wilayah']; 
      }else {
        # Jika Ganti Gambar
        $nama_file = $gambar_wilayah->getRandomName();
        $gambar_wilayah->move('gambar', $nama_file);
      }
      $data =
        [
          'id_wilayah' => $id_wilayah,
          'nama_wilayah' => $this->request->getPost('nama_wilayah'),
          'gambar_wilayah' => $nama_file,
        ];
      $this->ModelWilayah->updateData($data);
      Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
      return redirect()->to('Admin/Wilayah');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Wilayah/edit/'.$id_wilayah)->withInput();
    }
  }


  public function delete($id_wilayah)
  {
    $data =
      [
      'id_wilayah' => $id_wilayah,
      ];
    $this->ModelWilayah->deleteData($data);
    Session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
    return redirect()->to('Admin/Wilayah');
  }
}
