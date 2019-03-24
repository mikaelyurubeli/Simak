<div class="container">

  <h3>Tambah Nama Praktikum</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_master_data/do_add_nama_praktikum" method="post">
      <table class="table table-borderless">
        <tr>
          <td width="140px">Nama Praktikum</td>
          <td><input type="text" class="form-control" id="nama_praktikum" name="nama_praktikum" required></td>
        </tr>

        <tr>
          <td></td>
          <td class="text-right">					
            <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
            <input type="submit" value="Simpan" class="btn btn-success" style="width: 120px; height: 30px"/>
          </td>
        </tr>
      </table>
  	</form>
  </div>
</div>
