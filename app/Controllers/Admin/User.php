<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelUser;

class User extends BaseController
{
  public function __construct()
  {
    $this->ModelUser = new ModelUser();
  }
  public function index()
  {
    $data = [
      'judul' => 'User',
      'subjudul' => 'User',
      'menu' => 'user',
      'submenu' => 'user',
      'page'  => 'admin/v_user',
      'user' => $this->ModelUser->allData(),
    ];
    return view('v_template_back', $data);
  }

  public function insert()
  {
    $data =
      [
        'nama_user' => $this->request->getPost('nama_user'),
        'username' => $this->request->getPost('username'),
        'password' => sha1($this->request->getPost('password')),
        'level' => $this->request->getPost('level'),
      ];
    $this->ModelUser->insertData($data);
    Session()->setFlashdata('insert', 'Data Berhasil Ditambahkan!');
    return redirect()->to('Admin/User');
  }

  public function update($id_user)
  {
    $data =
      [
        'id_user' => $id_user,
        'nama_user' => $this->request->getPost('nama_user'),
        'username' => $this->request->getPost('username'),
        'level' => $this->request->getPost('level'),
      ];
    $this->ModelUser->updateData($data);
    Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
    return redirect()->to('Admin/User');
  }

  public function updatePassword($id_user)
  {
    $data =
      [
        'id_user' => $id_user,
        'password' => sha1($this->request->getPost('password')),
      ];
    $this->ModelUser->updateData($data);
    Session()->setFlashdata('update', 'Password Berhasil Diganti !');
    return redirect()->to('Admin/User');
  }

  public function delete($id_user)
  {
    $data =
      [
        'id_user' => $id_user,
      ];
    $this->ModelUser->deleteData($data);
    Session()->setFlashdata('delete', 'Data Berhasil Dihapus !');
    return redirect()->to('Admin/User');
  }
}
