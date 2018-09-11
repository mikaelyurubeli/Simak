<div class="container">

  <h3>Edit Dosen</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <?php foreach($data as $u){ ?>
        <form action="<?php echo base_url();?>admin/c_master_data/do_update_dosen" method="post">
        <table class="table table-borderless">
            <tr>
                <td width="140px">NIP</td>
                <td>
                    <input type="hidden" name="id_dosen" value="<?php echo $u->id_dosen ?>" class="form-control" />
                    <input type="text" value="<?php echo $u->nip ?>" class="form-control" id="nip" name="nip" placeholder="NIP" required>
                </td>
            </tr>

            <tr>
                <td>Nama Dosen</td>
                <td>
                    <input type="text" value="<?php echo $u->nama ?>" class="form-control" id="nama" name="nama" placeholder="Nama Dosen" required>
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

