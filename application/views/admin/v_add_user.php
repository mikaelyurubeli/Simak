<div class="container">

  <h3>Tambah User</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_user/do_add_user" method="post">
      <table class="table table-borderless">
        <tr>
          <td width="140px">Username</td>
          <td><input type="text" class="form-control" id="username" name="username" placeholder="username/noreg" required></td>
        </tr>

        <tr>
          <td>Password</td>
          <td><input type="password" class="form-control" id="password" name="password" placeholder="password" required></td>
        </tr>

        <tr>
          <td>Level</td>
          <td>
           <select class="form-control" id="level" name="level" required>
            <option value="">-- Pilih Level --</option>
            <option value="mahasiswa">mahasiswa</option>
            <option value="admin">admin</option>
            <option value="kalab">kalab</option>
           </select>
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
  </div>
</div>
