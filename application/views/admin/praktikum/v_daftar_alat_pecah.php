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
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->noreg ?></td>
            <td><?php echo $u->praktikum ?></td>
            <td><?php echo $u->alat_pecah ?></td>
            <td><?php echo $u->spesifikasi ?></td>
            <td><?php echo $u->jumlah ?></td>
            <td><?php echo $u->semester ?></td>
            <td>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
