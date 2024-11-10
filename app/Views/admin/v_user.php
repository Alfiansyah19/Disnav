<div class="col-sm-12">
  <div class="card card-outline card-primary">
    <div class="card-header">
      <h3 class="card-title">Data <?= $judul ?></h3>

      <div class="card-tools">
        <button type="button" class="btn btn-sm btn-flat btn-primary" data-toggle="modal" data-target="#tambah"><i class="fas fa-plus"></i> Tambah</button>
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
          <th>Nama User</th>
          <th>Username</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
        <?php $no = 1;
        foreach ($user as $key => $value) { ?>
          <tr>
            <td class="text-center"><?= $no++; ?></td>
            <td><?= $value['nama_user'] ?></td>
            <td class="text-center"><?= $value['username'] ?></td>
            <td class="text-center"><?= $value['level'] == 1 ? 'Admin' : 'User'?></td>
            <td class="text-center" width="250px">
              <button class="btn btn-flat btn-primary btn-sm" data-toggle="modal" data-target="#gantipassword<?= $value['id_user'] ?>"><i class="fa fa-lock"></i> Ganti Password</button>
              <button class="btn btn-flat btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $value['id_user'] ?>"><i class="fas fa-pencil-alt"></i></button>
              <a class="btn btn-flat btn-danger btn-sm" onclick="return confirm('Yakin Ingin Menghapus Data ?')" href="<?= base_url('Admin/User/delete/' . $value['id_user']) ?>"><i class="fas fa-trash"></i></a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="tambah">
  <div class="modal-dialog">
    <div class="modal-content">
      <?= form_open('Admin/User/insert') ?>
      <div class="modal-header">
        <h4 class="modal-title">Tambah User</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama User</label>
          <input name="nama_user" class="form-control" placeholder="Nama Lengkap" required>
        </div>
        <div class="form-group">
          <label>Username</label>
          <input name="username" class="form-control" placeholder="Username" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input name="password" class="form-control" placeholder="Password" required>
          <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control">
              <option value="1">Admin</option>
              <option value="2">User Ambon</option>
              <option value="3">User Sorong</option>
              <option value="4">User Kupang</option>
              <option value="5">User Jayapura</option>
              <option value="6">User Tual</option>
              <option value="7">User Merauke</option>
            </select>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default btn-flat btn-sm" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-flat btn-sm">Simpan</button>
        </div>
        <?= form_close() ?>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
</div>

<!-- Modal Edit -->
<?php foreach ($user as $key => $value) { ?>
  <div class="modal fade" id="edit<?= $value['id_user'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <?= form_open('Admin/User/update/' . $value['id_user']) ?>
        <div class="modal-header">
          <h4 class="modal-title">Edit User</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nama User</label>
            <input name="nama_user" value="<?= $value['nama_user'] ?>" class="form-control" placeholder="Nama Lengkap" required>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input name="username" value="<?= $value['username'] ?>" class="form-control" placeholder="Username" required>
          </div>
          <div class="form-group">
            <label>Level</label>
            <select name="level" class="form-control">
              <option value="1" <?= $value['level'] == 1 ? 'selected' : '' ?>>Admin</option>
              <option value="2" <?= $value['level'] == 2 ? 'selected' : '' ?>>User Ambon</option>
              <option value="2" <?= $value['level'] == 3 ? 'selected' : '' ?>>User Sorong</option>
              <option value="2" <?= $value['level'] == 4 ? 'selected' : '' ?>>User Kupang</option>
              <option value="2" <?= $value['level'] == 5 ? 'selected' : '' ?>>User Jayapura</option>
              <option value="2" <?= $value['level'] == 6 ? 'selected' : '' ?>>User Tual</option>
              <option value="2" <?= $value['level'] == 7 ? 'selected' : '' ?>>User Merauke</option>
            </select>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-flat btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat btn-sm">Simpan</button>
          </div>
          <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
<?php } ?>


<!-- Modal Ganti Password -->
<?php foreach ($user as $key => $value) { ?>
  <div class="modal fade" id="gantipassword<?= $value['id_user'] ?>">
    <div class="modal-dialog">
      <div class="modal-content">
        <?= form_open('Admin/User/updatePassword/' . $value['id_user']) ?>
        <div class="modal-header">
          <h4 class="modal-title">Ganti Password</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Username</label>
            <input name="username" value="<?= $value['username'] ?>" class="form-control" placeholder="Username" readonly>
          </div>
          <div class="form-group">
            <label>Password Baru</label>
            <input name="password" class="form-control" placeholder="Password Baru" required>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default btn-flat btn-sm" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-flat btn-sm">Simpan</button>
          </div>
          <?= form_close() ?>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>
<?php } ?>