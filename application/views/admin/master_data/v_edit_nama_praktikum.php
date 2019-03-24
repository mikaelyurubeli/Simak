<div class="container">

  <h3>Edit Nama Praktikum</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <?php foreach($data as $u){ ?>
        <form action="<?php echo base_url();?>admin/c_master_data/do_update_nama_praktikum" method="post">
        <table class="table table-borderless">
            <tr>
                <td>Nama Praktikum</td>
                <td>
                    <input type="hidden" name="id_nama_prak" value="<?php echo $u->id_nama_prak ?>" class="form-control" />
                    <input type="text" value="<?php echo $u->nama_praktikum ?>" class="form-control" id="nama_praktikum" name="nama_praktikum" placeholder="Nama Praktikum" required>
                </td>
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
    <?php } ?>
  </div>
</div>

