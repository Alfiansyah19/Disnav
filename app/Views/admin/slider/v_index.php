<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Data <?= $judul ?></h3>

      <div class="card-tools">
        <a href="<?= base_url('Admin/Slider/tambah')?>" type="button" class="btn btn-sm btn-flat btn-primary" ><i class="fas fa-plus"></i> Tambah</a>
      </div>
      <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <?php
      if (session()->getFlashdata('insert')) {
        echo '<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-check"></i> Insert !</h5>';
        echo session()->getFlashdata('insert');
        echo '</div>';
      }

      if (session()->getFlashdata('update')) {
        echo '<div class="alert alert-primary alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-sync"></i> Update !</h5>';
        echo session()->getFlashdata('update');
        echo '</div>';
      }

      if (session()->getFlashdata('delete')) {
        echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-trash"></i> Delete !</h5>';
        echo session()->getFlashdata('delete');
        echo '</div>';
      }

      ?>



      <table class="table table-bordered table-sm">
        <tr class="text-center">
          <th width="50px">No</th>
          <th width="250px">Gambar Slider</th>
          <th>Judul Slider</th>
          <th>Url Terkait</th>
          <th width=" 80px">Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($slider as $key => $value) { ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td class="text-center"><img src="<?= base_url('gambar/') . $value['gambar_slider'] ?>" width="250px"></td>
            <td class="text-center"><?= $value['judul_slider'] ?></td>
            <td class="text-center"><?= $value['url_terkait'] ?></td>
            <td class="text-center">
              <a href="<?= base_url('Admin/Slider/update/' . $value['id_slider']) ?>" class="btn btn-flat btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <a href="<?= base_url('Admin/Slider/delete/' . $value['id_slider']) ?>" class="btn btn-flat btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>