<div class="container">
  <div class="row">
    <center><h3>Daftar Praktikum <?php echo $nama ?></h3></center><br/>
    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
    <table class="table table-stripped">
      <tr>
        <th>No</th>
        <th>Nama Praktikum</th>
        <th>Semester</th>
        <th>Aksi</th>
      </tr>
      <?php
      $no = 1;
      foreach ($mahasiswa as $u) { ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nama_praktikum ?></td>
        <td><?php echo $u->semester ?></td>
        <td>
          <a href="<?php echo base_url();?>admin/c_praktikum/cetak_form_nilai/<?php print($u->id_mahasiswa)?>/<?php print($u->id_praktikum)?>" class="btn btn-success" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Cetak">
            <span class="glyphicon glyphicon-print" />
          </a>
        </td>
      </tr>
      <?php } ?>
    </table>
    </div>
  </div>
</div>
