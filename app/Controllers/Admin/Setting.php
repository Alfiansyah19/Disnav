<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ModelSetting;

class Setting extends BaseController
{
  public function __construct()
  {
    $this->ModelSetting = new ModelSetting();
  }
  public function header()
  {
    $data = [
      'judul' => 'Setting',
      'subjudul' => 'Header Kantor',
      'menu' => 'setting',
      'submenu' => 'header',
      'page' => 'admin/setting/v_header',
      'web' => $this->ModelSetting->detailData(),
    ];
    return view('v_template_back', $data);
  }
  public function updateLogoHeader() 
  {
    if ($this->validate([
      'header_logo' => [
        'label' => 'Header Logo',
        'rules' =>'max_size[header_logo,150]|mime_in[header_logo,image/png]',
        'error' => [
          'uploaded' => '{field} Tidak Boleh Kosong !',
          'max_size' => '{field} Maksimal Ukuran File 150 KB !',
          'mime_in' => '{field} Harus Sesuai Format png !',
        ]
      ]
    ])) {
      $web = $this->ModelSetting->detailData();
      $web = $this->request->getFile('header_logo');
      if ($web->getError() == 4) {
        # Jika Tidak Ganti Gambar
        $nama_file = $web['header_logo'];
      }else {
        # Jika Ganti Gambar
      $nama_file = $web->getRandomName();
      $web->move('gambar',$nama_file);
      }
      $data =
        [
          'id' => '1',
          'header_logo' => $nama_file,
        ];
      $this->ModelSetting->updateData($data);
      Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
      return redirect()->to('Admin/Setting/header');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Setting/header')->withInput();
    }
  
  }

  public function hero()
  {
    $data = [
      'judul' => 'Setting',
      'subjudul' => 'Hero Kantor',
      'menu' => 'setting',
      'submenu' => 'hero',
      'page' => 'admin/setting/v_hero',
      'web' => $this->ModelSetting->detailData(),
    ];
    return view('v_template_back', $data);
  }
  public function updateLogoHero()
  {
    if ($this->validate([
      'hero_kantor' => [
        'label' => 'Hero Kantor',
        'rules' => 'max_size[hero_kantor,250]|mime_in[hero_kantor,image/jpeg]',
        'error' => [
          'uploaded' => '{field} Tidak Boleh Kosong !',
          'max_size' => '{field} Maksimal Ukuran File 150 KB !',
          'mime_in' => '{field} Harus Sesuai Format png !',
        ]
      ]
    ])) {
      $web = $this->ModelSetting->detailData();
      $web = $this->request->getFile('hero_kantor');
      if ($web->getError() == 4) {
        # Jika Tidak Ganti Gambar
        $nama_file = $web['hero_kantor'];
      } else {
        # Jika Ganti Gambar
        $nama_file = $web->getRandomName();
        $web->move('gambar', $nama_file);
      }
      $data =
        [
          'id' => '1',
        'hero_kantor' => $nama_file,
        ];
      $this->ModelSetting->updateData($data);
      Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
      return redirect()->to('Admin/Setting/hero');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Setting/hero')->withInput();
    }
  }
  public function logo()
  {
    $data = [
      'judul' => 'Setting',
      'subjudul' => 'Logo Kantor',
      'menu' => 'setting',
      'submenu' => 'logo',
      'page' => 'admin/setting/v_logo',
      'web' => $this->ModelSetting->detailData(),
    ];
    return view('v_template_back', $data);
  }
  public function updateLogoKantor()
  {
    if ($this->validate([
      'logo_kantor' => [
        'label' => 'Logo Kantor',
        'rules' => 'max_size[logo_kantor,250]|mime_in[logo_kantor,image/png]',
        'error' => [
          'uploaded' => '{field} Tidak Boleh Kosong !',
          'max_size' => '{field} Maksimal Ukuran File 150 KB !',
          'mime_in' => '{field} Harus Sesuai Format png !',
        ]
      ]
    ])) {
      $web = $this->ModelSetting->detailData();
      $web = $this->request->getFile('logo_kantor');
      if ($web->getError() == 4) {
        # Jika Tidak Ganti Gambar
        $nama_file = $web['logo_kantor'];
      } else {
        # Jika Ganti Gambar
        $nama_file = $web->getRandomName();
        $web->move('gambar', $nama_file);
      }
      $data =
        [
          'id' => '1',
          'logo_kantor' => $nama_file,
        ];
      $this->ModelSetting->updateData($data);
      Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
      return redirect()->to('Admin/Setting/logo');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Setting/logo')->withInput();
    }
  }

  public function kantor()
  {
    $data = [
      'judul' => 'Setting',
      'subjudul' => 'Kantor',
      'menu' => 'setting',
      'submenu' => 'kantor',
      'page' => 'admin/setting/v_kantor',
      'web' => $this->ModelSetting->detailData(),
    ];
    return view('v_template_back', $data);
  }
  public function updateKantor()
  {
    if ($this->validate([
      'nama_kantor' => [
        'label' => 'Nama Kantor',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
        ],
      'alamat' => [
        'label' => 'Alamat',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
        ],
      'title' => [
        'label' => 'Title',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'subtitle' => [
        'label' => 'Sub Title',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'no_telpon' => [
        'label' => 'No Telpon',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'email' => [
        'label' => 'Email',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'youtube' => [
        'label' => 'Youtube',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'facebook' => [
        'label' => 'Facebook',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'instagram' => [
        'label' => 'Instagram',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
      'linkedin' => [
        'label' => 'Linkedin',
        'rules' => 'required',
        'error' => [
          'required' => '{field} Tidak Boleh Kosong !',
        ]
      ],
    ])) {
      $data =
        [
        'id' => '1',
        'nama_kantor' => $this->request->getPost('nama_kantor'),
        'alamat' => $this->request->getPost('alamat'),
        'title' => $this->request->getPost('title'),
        'subtitle' => $this->request->getPost('subtitle'),
        'no_telpon' => $this->request->getPost('no_telpon'),
        'email' => $this->request->getPost('email'),
        'youtube' => $this->request->getPost('youtube'),
        'facebook' => $this->request->getPost('facebook'),
        'instagram' => $this->request->getPost('instagram'),
        'linkedin' => $this->request->getPost('linkedin'),
        ];
      $this->ModelSetting->updateData($data);
      Session()->setFlashdata('update', 'Data Berhasil Diupdate!');
      return redirect()->to('Admin/Setting/kantor');
    } else {
      # Jika Tidak Valid
      return redirect()->to('Admin/Setting/kantor')->withInput();
    }
  }
}
