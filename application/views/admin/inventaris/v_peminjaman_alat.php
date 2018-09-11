<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Daftar Peminjaman Alat</h3></center><br/>

    <?php
      if(empty($hasil)){
        echo "<div class='text-center'>Belum ada peminjaman alat kimia!</div>";
      } else { ?>
        <div clas="row">
          <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
            <table class="table table-striped">
              <tr>
                <th>No</th>
                <th>No Registrasi</th>
                <th>Mahasiswa</th>
                <th>Jenis Kegiatan</th>
                <th>Tanggal Peminjaman</th>
                <th>Aksi</th>
              <tr>

              <?php
                $no = 1;
                foreach ($hasil as $u) {
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->noreg ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->jenis_kegiatan ?></td>
                <td><?php echo $u->tgl_peminjaman ?></td>
                <td>
                <a href="<?php echo base_url();?>admin/c_peminjaman/daftar_peminjaman_alat/<?php print($u->id_peminjaman);?>" title="Lihat Daftar Alat" class="btn btn-success" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-search" />
                </a>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
