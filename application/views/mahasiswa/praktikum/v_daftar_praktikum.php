<div class="container">
    <?php if($period_daftar == "Buka") { ?>
    <div class="row">
      <center><h3>Masukkan kode praktikum</h3></center>
      <div class="col-md-2 col-xs-2 col-md-offset-5 col-xs-offset-5" style="margin-top: 2%">
        <form action="<?php echo base_url();?>mahasiswa/c_praktikum/do_add_praktikum" method="post">
          <div class="form-group center">
            <input class="form-control" type="text" name="tambah_praktikum" required />
            <button class="btn btn-default form-control" type="submit" name="submit">Simpan</button>
          </div>
        </form>
      </div>
    </div>
    <hr>
    <?php } ?>

    <?php
      if(empty($rp)){
        echo "<center><h4>Anda belum mendaftar praktikum!</h4></center>";
      } else {
    ?>
      <center><h3>Daftar Praktikum - Semester <?php echo $semester ?></h3></center><br>
      <div class="row">
        <div class="col-md-1 col-md-offset-10" style="margin-bottom: 1%; text-align: right">
          <a href="<?php echo base_url();?>mahasiswa/c_praktikum/cetak_bukti_praktikum" class="btn btn-success" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Cetak">
            <span class="glyphicon glyphicon-print" />
          </a>
        </div>
      </div>
      <div class="row">
      <div class="col-md-10 col-xs-10 col-md-offset-1 col-xs-offset-1">
      <table class="table table-stripped styling">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Praktikum</th>
          <th>Dosen</th>
          <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($rp as $u) { ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->kode_praktikum ?></td>
          <td><?php echo $u->nama_praktikum ?></td>
          <td><?php echo $u->dosen ?></td>
          <td>
            <?php if($period_daftar == "Buka") {?>
              <a href="<?php echo base_url();?>mahasiswa/c_praktikum/do_delete_praktikum_rp/<?php print($u->id_rp);?>" title="Delete" onClick="return doconfirm();" class="btn btn-danger">
              Batal</a>
            <?php }?>
          </td>
        </tr>
        <?php } ?>
      </table>
      </div>
    </div>
    <?php } ?>
</div>
