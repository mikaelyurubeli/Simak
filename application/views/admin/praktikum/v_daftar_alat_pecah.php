<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Alat Pecah</h3></legend>
      <?php echo anchor('admin/c_praktikum/tambah_alat_pecah','Tambah Alat Pecah', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama</th>
            <th>No Registrasi</th>
            <th>Praktikum</th>
            <th>Alat Pecah</th>
            <th>Spesifikasi</th>
            <th>Jumlah</th>
            <th>Semester</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach($data as $u){
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u['nama'] ?></td>
            <td><?php echo $u['noreg'] ?></td>
            <td><?php foreach($u['praktikum'] as $x){ echo $x."<br />"; }?></td>
            <td><?php foreach($u['nama_alat_pecah'] as $x){ echo $x."<br />"; }?></td>
            <td><?php foreach($u['jumlah'] as $x){ echo $x."<br />"; }?></td>
            <td><?php foreach($u['spesifikasi'] as $x){ echo $x."<br />"; }?></td>
            <td><?php echo $u['semester'] ?></td>
            <td style="min-width: 90px">
              <a href="<?php echo base_url();?>admin/c_praktikum/edit_alat_pecah/<?php print($u['id'])?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-edit" />
              </a>
              <a href="<?php echo base_url();?>admin/c_praktikum/delete_alat_pecah/<?php print($u['id'])?>" title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini ?');" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-trash" />
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
