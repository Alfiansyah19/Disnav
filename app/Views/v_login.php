<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('back') ?>/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="<?= base_url('back') ?>/index2.html" class="h1"><b>Admin</b>LTE</a>
      </div>
      <div class="card-body">

        <p class="login-box-msg">Silahkan Login</p>
        <?php
        if (session()->getFlashdata('gagal')) {
          echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  ';
          echo session()->getFlashdata('gagal');
          echo '</div>';
        }
                if (session()->getFlashdata('berhasil')) {
                  echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  ';
                  echo session()->getFlashdata('berhasil');
                  echo '</div>';
                }
        ?>
        <?= form_open('Auth/cekLogin') ?>
        <div class="input-group mb-3">
          <input name="username" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <!-- pesan -->
        <p class="text-danger"><?= validation_show_error('username') ?></p>
        <p class="text-danger"><?= validation_show_error('password') ?></p>
        <!-- end pesan -->
        <div class="row">
          <div class="col-6">
            <a href="<?= base_url() ?>" class="btn btn-success btn-flat btn-block">Website</a>
          </div>
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
          </div>
          <!-- /.col -->
        </div>
        <?= form_close() ?>
        <!-- /.social-auth-links -->
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="<?= base_url('back') ?>/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('back') ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('back') ?>/dist/js/adminlte.min.js"></script>
</body>

</html>