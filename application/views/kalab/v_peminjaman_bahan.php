<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Daftar Peminjaman Bahan</h3></center><br/>

    <?php
      if(empty($hasil)){
        echo "Belum ada peminjaman bahan kimia!";
      } else { ?>
        <div class="row">
          <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
            <table class="table table-stripped">
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
                  <?php echo anchor('kalab/c_peminjaman/daftar_peminjaman_bahan/'.$u->id_peminjaman,'check', array('class' => 'btn btn-success')); ?>
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
