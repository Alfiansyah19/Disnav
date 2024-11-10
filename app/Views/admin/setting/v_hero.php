<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Gambar <?= $subjudul ?></h3>


      <!-- /.card-tools -->
    </div>
    <?= form_open_multipart('Admin/Setting/updateLogoHero') ?>
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
      <div class="col-sm-5">
        <div class="form-group">
          <img src="<?= base_url('gambar/' . $web['hero_kantor']) ?>" width="500px" id="gambar_load" style="border-style: solid; border-color: green;">
          <p class="text-danger"><?= validation_show_error('gambar_load') ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label>Ganti Gambar Logo</label>
            <input type="file" name="hero_kantor" accept="image/jpeg" id="preview_gambar" required>
            <p class="text-danger"><?= validation_show_error('hero_kantor') ?></p>
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