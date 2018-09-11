<div class="container">
  <h3>Tambah Alat</h3>
  <div class="col-md-5">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_peminjaman/do_add_alat" method="post">
      <table class="table table-borderless">
        <tr>
          <td>Nama Alat</td>
          <td><input type="text" class="form-control" id="nama_alat" name="nama_alat" required></td>
        </tr>
        <tr>
          <td>Spesifikasi</td>
          <td><input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required></td>
        </tr>

        <tr>
          <td>Jumlah</td>
          <td><input type="text" class="form-control" id="jumlah" name="jumlah" required></td>
        </tr>

        <tr>
          <td></td>
          <td class="text-right">
            <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
            <input type="submit" value="Submit" class="btn btn-success" style="width: 120px; height: 30px">
          </td>
        </tr>
      </table>
  	</form>
  </div>
</div>
