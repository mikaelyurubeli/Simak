<div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 1%">
      <center><h3>Daftar Jadwal Praktikum</h3></center>
      <center><?php echo anchor('admin/c_praktikum/add_jadwal_praktikum', 'Buat Jadwal', array('class' => 'btn btn-success btn-sm')); ?></center>
    </div>
  </div>

  <div class="row">  
    <div class="col-md-12 col-xs-12" style="margin-bottom: 1%;">
    <?php
      if(empty($hasil_jadwal)){
        echo "<div class='text-center'>Jadwal belum dibuat!</div>";
      } else {
        ?>
        <table class="table table-striped table-datatable">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Kode</th>
              <th>Hari/Jam</th>
              <th>Praktikum</th>
              <th>Dosen</th>
              <th>Lokasi</th>
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
            </tr>
          </tfoot>

          <tbody>
          <?php
            $no = 1;
            foreach ($hasil_jadwal as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->kode_praktikum ?></td>
            <td class="col-md-2"><?php echo $u->hari," ",$u->jam ?></td>
            <td><a href="<?php echo base_url();?>admin/c_praktikum/daftar_peserta_praktikum/<?php print($u->id_praktikum);?>"><?php echo $u->nama_praktikum ?></a></td>
            <td><?php echo $u->dosen ?></td>
            <td><?php echo $u->lokasi ?></td>
            <td><?php echo $u->semester ?></td>
            <td>
              <a href="<?php echo base_url();?>admin/c_praktikum/edit_jadwal/<?php print($u->id_jadwal);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-edit" />
              </a>
              <a href="<?php echo base_url();?>admin/c_praktikum/do_delete_jadwal/<?php print($u->id_jadwal);?>" title="Delete" onClick="return doconfirm();" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
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
