<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Data <?= $subjudul ?></h3>


      <!-- /.card-tools -->
    </div>
    <?= form_open_multipart('Admin/Setting/updateKantor') ?>
    <div class="card-body">
      <?php
      if (session()->getFlashdata('update')) {
        echo '<div class="alert alert-primary alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-sync"></i> Update !</h5>';
        echo session()->getFlashdata('update');
        echo '</div>';
      }

      ?>
      <div class="row">
        <!-- Nama Kantor -->
        <div class="col-sm-9">
          <div class="form-group">
            <label>Nama Kantor</label>
            <input type="text" name="nama_kantor" value="<?= $web['nama_kantor'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('nama_kantor') ?></p>
          </div>
        </div>
        <!-- No Telpon -->
        <div class="col-sm-3">
          <div class="form-group">
            <label>No Telpon</label>
            <input type="text" name="no_telpon" value="<?= $web['no_telpon'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('no_telpon') ?></p>
          </div>
        </div>
        <!-- Alamat -->
        <div class="col-sm-9">
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= $web['alamat'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('alamat') ?></p>
          </div>
        </div>
        <!-- Email -->
        <div class="col-sm-3">
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" value="<?= $web['email'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('email') ?></p>
          </div>
        </div>
        <!-- Titile -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Title</label>
            <input type="text" name="title" value="<?= $web['title'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('title') ?></p>
          </div>
        </div>
        <!-- Sub Title -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Sub Title</label>
            <input type="text" name="subtitle" value="<?= $web['subtitle'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('subtitle') ?></p>
          </div>
        </div>
        <!-- Link Youtube -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Youtube</label>
            <input type="text" name="youtube" value="<?= $web['youtube'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('youtube') ?></p>
          </div>
        </div>
        <!-- Link Facebook -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Facebook</label>
            <input type="text" name="facebook" value="<?= $web['facebook'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('facebook') ?></p>
          </div>
        </div>
        <!-- Link Instagram -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Instagram</label>
            <input type="text" name="instagram" value="<?= $web['instagram'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('instagram') ?></p>
          </div>
        </div>
        <!-- Link Likeedin -->
        <div class="col-sm-6">
          <div class="form-group">
            <label>Likeedin</label>
            <input type="text" name="linkedin" value="<?= $web['linkedin'] ?>" class="form-control">
            <p class="text-danger"><?= validation_show_error('linkedin') ?></p>
          </div>
        </div>

      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-flat">Simpan</button>
    </div>
    <?= form_close() ?>
  </div>
</div>
<script>
  function bacaGambar(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#gambar_load').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $('#preview_gambar').change(function() {
    bacaGambar(this);
  });
</script>