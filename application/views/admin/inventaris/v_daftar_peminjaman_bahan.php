<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Daftar Pemakaian Bahan Kimia</h3></center><br/>
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-xs-8 col-md-offset-2 col-xs-offset-2">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Alat</th>
            <th>Spesifikasi</th>
            <th>Jumlah</th>
          </tr>
        <thead>
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
            foreach ($daftar as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_bahan ?></td>
            <td><?php echo $u->spesifikasi ?></td>
            <td><?php echo $u->jumlah_peminjaman ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-2 col-xs-2 col-md-offset-8 col-xs-offset-8">
      <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px; margin-left: 40px;"/>
    </div>
  </div>
</div>
