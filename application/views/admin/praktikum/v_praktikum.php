<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 1%">
      <center><h3>Daftar Matakuliah Praktikum</h3></center>
      <center><?php echo anchor('admin/c_praktikum/add_praktikum', 'Tambah Praktikum', array('class' => 'btn btn-success btn-sm')); ?></center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12" style="margin-bottom: 1%">
      <?php
        if(empty($hasil_praktikum)){
          echo "<div class='text-center'>Belum Ada Matakuliah Praktikum!</div>";
        } else {
      ?>
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th width="10px">No</th>
            <th>Kode</th>
            <th>Praktikum</th>
            <th>Dosen</th>
            <th>Semester</th>
            <th>Prasyarat</th>
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
          </tr>
        </tfoot>
        <tbody>
          <?php
            $no = 1;
            foreach ($hasil_praktikum as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->kode_praktikum ?></td>
            <td><?php echo $u->nama_praktikum ?></td>
            <td><?php echo $u->dosen ?></td>
            <td><?php echo $u->semester ?></td>
            <td><?php echo $u->prasyarat ?></td>
            <td>
              <a href="<?php echo base_url();?>admin/c_praktikum/edit_praktikum/<?php print($u->id_praktikum);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-edit" />
              </a>
              <a href="<?php echo base_url();?>admin/c_praktikum/do_delete_praktikum/<?php print($u->id_praktikum);?>" onClick="return doconfirm();" title="Delete Data" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-trash" />
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
        <?php } ?>
    </div>
  </div>
</div>
