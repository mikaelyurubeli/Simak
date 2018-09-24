<div class="container-fluid" style="margin-right: 20px; margin-left: 20px">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Pendaftaran Asisten</h3></legend><br/>
    </div>
  </div>

  <?php
    if(empty($hasil)){
      echo "<div class='row'><div class='col-md-12 col-xs-12'><div class='text-center'>Belum ada pendaftar untuk asisten!</div></div></div>";
    } else { ?>
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <table class="table table-striped table-datatable">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>Pilihan 3</th>
                <th>Nilai Kimia Organik</th>
                <th>Jam Kosong</th>
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

            <?php
              $no = 1;
              foreach ($hasil as $u) {
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $u->nama ?></td>
              <td><?php echo $u->pilihan_praktikum1 ?></td>
              <td><?php echo $u->pilihan_praktikum2 ?></td>
              <td><?php echo $u->pilihan_praktikum3 ?></td>
              <td><?php echo $u->nilai_kimia_organik ?></td>
              <td><?php echo $u->jam_kosong ?></td>
              <td><?php echo $u->semester_pk ?></td>
              <td style="min-width: 90px">
                <a href="<?php echo base_url();?>admin/c_asisten/edit_asisten/<?php print($u->id_daftar)?>" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Edit Form">
                  <span class="glyphicon glyphicon-edit" />
                </a>
                <a href="<?php echo base_url();?>admin/c_asisten/cetak_form_daftar/<?php print($u->id_mahasiswa)?>/<?php print($u->id_daftar)?>" class="btn btn-success" target="_blank"data-toggle="tooltip" data-placement="bottom" title="Cetak">
                  <span class="glyphicon glyphicon-print" />
                </a>
              </td>
            </tr>
            <?php } ?>
          </table>
        </div>
      </div>
    <?php } ?>
</div>
