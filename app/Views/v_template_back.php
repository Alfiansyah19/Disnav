<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/dist/css/adminlte.min.css">

  <!-- jQuery -->
  <script src="<?= base_url('back') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('back') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('back') ?>/dist/js/adminlte.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <!-- <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li> -->
        <li class="nav-item d-none d-sm-inline-block">
          <a href="http://localhost/Distrik/public/" class="nav-link">Home</a>
        </li>
        <!-- <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li> -->
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">



        <li class="nav-item">
          <!-- <a class="nav-link" href="http://localhost/Distrik/public/" role="button">
            <i class="fas fa-home"></i>
          </a> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('Auth/logout') ?>">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="<?= base_url('back') ?>/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?= base_url('back') ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?= session()->get('nama_user') ?></a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if (session()->get('level') == 1) : ?>
              <!-- Dasboard -->
              <li class="nav-item">
                <a href="<?= base_url('Admin/Dashboard') ?>" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
              <!-- Wilayah -->
              <li class="nav-item">
                <a href="<?= base_url('Admin/Wilayah') ?>" class="nav-link <?= $menu == 'wilayah' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-warehouse"></i>
                  <p>
                    Wilayah
                  </p>
                </a>
              </li>
              <!-- Slider -->
              <li class="nav-item">
                <a href="<?= base_url('Admin/Slider') ?>" class="nav-link <?= $menu == 'slider' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-window-maximize"></i>
                  <p>
                    Slider
                  </p>
                </a>
              </li>
              <!-- User -->
              <li class="nav-item">
                <a href="<?= base_url('Admin/User') ?>" class="nav-link <?= $menu == 'user' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    User
                  </p>
                </a>
              </li>
              <!-- Setting -->
              <li class="nav-item <?= $menu == 'setting' ? 'menu-open' : '' ?> ">
                <a href="<" class="nav-link <?= $menu == 'setting' ? 'active' : '' ?>">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Setting
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Data Logo -->
                  <li class="nav-item">
                    <a href="<?= base_url('Admin/Setting/logo') ?>" class="nav-link <?= $submenu == 'logo' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Logo Kantor</p>
                    </a>
                  </li>
                  <!-- Data Header -->
                  <li class="nav-item">
                    <a href="<?= base_url('Admin/Setting/header') ?>" class="nav-link <?= $submenu == 'header' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header Kantor</p>
                    </a>
                  </li>
                  <!-- Data Hero -->
                  <li class="nav-item">
                    <a href="<?= base_url('Admin/Setting/hero') ?>" class="nav-link <?= $submenu == 'hero' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Hero Kantor</p>
                    </a>
                  </li>
                  <!-- Data Kantor -->
                  <li class="nav-item">
                    <a href="<?= base_url('Admin/Setting/kantor') ?>" class="nav-link <?= $submenu == 'kantor' ? 'active' : '' ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Data Kantor</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- Batas Wilah Kerja -->
            <?php elseif (session()->get('level') == 2) : ?>
              <!-- Daerah Ambon -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Ambon
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php elseif (session()->get('level') == 3) : ?>
              <!-- Daerah Sorong -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Sorong
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php elseif (session()->get('level') == 4) : ?>
              <!-- Daerah Kupang -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Kupang
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php elseif (session()->get('level') == 5) : ?>
              <!-- Daerah Jayapura -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Jayapura
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php elseif (session()->get('level') == 6) : ?>
              <!-- Daerah Tual -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Tual
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php elseif (session()->get('level') == 7) : ?>
              <!-- Daerah Merauke -->
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon far fa-building"></i>
                  <p>
                    Merauke
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <!-- Pembangunan Alur Pelayanan & Perlintasan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Alur Pelayanan & Perlintasan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Perlintasan</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Alur Masuk Pelabuhan</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sarana Bantu Navigasi Pelayanan -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sarana Bantu Navigasi Pelayanan
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Rambu Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Pelampung Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Menara Suar</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Tanda Siang</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Pembangunan Telekomunikasi Pelayaran -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Pembangunan Telekomunikasi Pelayaran
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Eksisting
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>NAVTEX</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a href="#" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Rencana
                            <i class="right fas fa-angle-left"></i>
                          </p>
                        </a>
                        <ul class="nav nav-treeview">
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>REAPEATER</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>SROP</p>
                            </a>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="far fa-dot-circle nav-icon"></i>
                              <p>VTS</p>
                            </a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <!-- Armada Kapal Negara Kenavigasian -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Armada Kapal Negara Kenavigasian
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Sumber Daya Manusia -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Sumber Daya Manusia
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!-- Fasilitas Penunjang -->
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <p>
                        Fasilitas Penunjang
                        <i class="fas fa-angle-left right"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="pages/examples/login.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="pages/examples/register.html" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>#</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
            <?php endif  ?>
            <!-- Batas Daerah -->

            <!-- <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Simple Link
                  <span class="right badge badge-danger">New</span>
                </p>
              </a>
            </li> -->
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0"><?= $judul ?> | Data <?= $subjudul ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#"><?= $judul ?></a></li>
                <li class="breadcrumb-item active"><?= $subjudul ?></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <?php
      if ($page) {
        echo view($page);
      }
      ?>
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.Kontaen -->

            <!-- /.Kontaen -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

</body>

</html>