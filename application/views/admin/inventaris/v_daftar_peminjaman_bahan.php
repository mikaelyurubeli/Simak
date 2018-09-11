<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Daftar Peminjaman Bahan</h3></center><br/>
      <div clas="row">
        <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
          <table class="table table-striped">
            <tr>
              <th>No</th>
              <th>Nama Alat</th>
              <th>Spesifikasi</th>
              <th>Jumlah</th>
              <th>Aksi</th>
            <tr>

            <?php
              $no = 1;
              foreach ($daftar as $u) {
            ?>
            <tr>
              <td><?php echo $no++ ?></td>
              <td><?php echo $u->nama_bahan ?></td>
              <td><?php echo $u->spesifikasi ?></td>
              <td><?php echo $u->jumlah_peminjaman ?></td>
              <td></td>
            </tr>
            <?php } ?>
          </table>
        </div>
        <div class="col-md-2 col-xs-2 col-md-offset-8 col-xs-offset-8">
          <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px; margin-left: 40px;"/>
        </div>
      </div>
    </div>
  </div>
</div>
