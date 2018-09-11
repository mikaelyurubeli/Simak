<div class="container">
  <div class="row">
    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
      <legend><h3>Daftar Mahasiswa</h3></legend><br />
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>No Registrasi</th>
            <th>Nama Mahasiswa</th>
            <th>Program Studi</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach ($mahasiswa as $u) { ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->noreg ?></td>
            <td>
              <a href="<?php echo base_url();?>admin/c_praktikum/data_rp/<?php print($u->id_mahasiswa);?>/<?php print($u->nama)?>"><?php echo $u->nama ?>
              </a>
            </td>
            <td><?php echo $u->program_studi ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
