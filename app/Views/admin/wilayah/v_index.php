<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Data <?= $judul ?></h3>

      <div class="card-tools">
        <a href="<?= base_url('Admin/Wilayah/tambah') ?>" type="button" class="btn btn-sm btn-flat btn-primary"><i class="fas fa-plus"></i> Tambah</a>
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
          <th width="250px">Gambar Wilayah</th>
          <th>Nama Wiayah</th>
          <th width=" 80px">Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($wilayah as $key => $value) { ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td class="text-center"><img src="<?= base_url('gambar/') . $value['gambar_wilayah'] ?>" width="250px"></td>
            <td class="text-center"><?= $value['nama_wilayah'] ?></td>
            <td class="text-center">
              <a href="<?= base_url('Admin/Wilayah/edit/' . $value['id_wilayah']) ?>" class="btn btn-flat btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
              <a href="<?= base_url('Admin/Wilayah/delete/' . $value['id_wilayah']) ?>" class="btn btn-flat btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ?')"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>