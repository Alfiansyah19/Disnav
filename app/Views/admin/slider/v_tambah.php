<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Tambah <?= $judul ?></h3>


      <!-- /.card-tools -->
    </div>
    <?= form_open_multipart('Admin/Slider/insert') ?>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-7">
          <div class="form-group">
            <label>Judul Slider</label>
            <input class="form-control" name="judul_slider" placeholder="Judul Slider">
            <p class="text-danger"><?= validation_show_error('judul_slider') ?></p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <label>Url Terkait</label>
            <input class="form-control" name="url_terkait" placeholder="Url Terkait">
            <p class="text-danger"><?= validation_show_error('url_terkait') ?></p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Upload Gambar</label>
            <input type="file" name="gambar_slider" accept="image/*" id="preview_gambar">
            <p class="text-danger"><?= validation_show_error('gambar_slider') ?></p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <label>Preview Gambar</label><br>
            <img src="<?= base_url('gambar/1920x766.png') ?>" width="450px" id="gambar_load" style="border-style: solid; border-color: green;">
            <p class="text-danger"><?= validation_show_error('gambar_load') ?></p>
          </div>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary btn-flat">Submit</button>
      <a href="<?= base_url('Admin/Slider') ?>" class="btn btn-success btn-flat">Kembali</a>
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