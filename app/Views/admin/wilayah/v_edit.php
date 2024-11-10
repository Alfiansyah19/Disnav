<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Edit <?= $judul ?></h3>
    </div>
    <?= form_open_multipart('Admin/Wilayah/update/'.$wilayah['id_wilayah']) ?>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-10">
          <div class="form-group">
            <label>Nama Wilayah</label>
            <input class="form-control" name="nama_wilayah" value="<?= $wilayah['nama_wilayah'] ?>" placeholder="Nama Wilayah">
            <p class="text-danger"><?= validation_show_error('nama_wilayah') ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <div class="form-group">
              <label>Ganti Gambar</label>
              <input type="file" name="gambar_wilayah" accept="image/*" id="preview_gambar">
              <p class="text-danger"><?= validation_show_error('gambar_wilayah') ?></p>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="form-group">
              <label>Preview Gambar</label><br>
              <img src="<?= base_url('gambar/'.$wilayah['gambar_wilayah']) ?>" width="450px" id="gambar_load" style="border-style: solid; border-color: green;">
              <p class="text-danger"><?= validation_show_error('gambar_load') ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary btn-flat">Submit</button>
        <a href="<?= base_url('Admin/Wilayah') ?>" class="btn btn-success btn-flat">Kembali</a>
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