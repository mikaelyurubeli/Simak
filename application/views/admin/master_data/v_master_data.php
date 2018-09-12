<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Master Data</h3></center><br/>
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <table class="table table-striped">
              <tr>
                <th>Semester</th>
                <th>Tahun Akademik</th>
                <th>Pedaftaran Praktikum</th>
                <th>Aksi</th>
              <tr>

              <?php
                $no = 1;
                foreach ($hasil as $u) {
              ?>
              <tr>
                <td><?php echo $u->semester ?></td>
                <td><?php echo $u->tahun_akademik ?></td>
                <td><?php echo $u->daftar_praktikum ?></td>
                <td>
                  <a href="<?php echo base_url();?>admin/c_master_data/edit_master_data/<?php print($u->id_master);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                    <span class="glyphicon glyphicon-edit" />
                  </a>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
    </div>
  </div>
</div>
