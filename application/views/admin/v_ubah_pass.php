<div class="container-fluid">
	<h3><center>Ubah Password</center></h3>
	<div class="col-md-5 col-md-offset-3" style="margin-top: 2%">
    <form role="form" action="<?php echo base_url();?>admin/c_user/edit_pass" method="post">
		<table class="table table-borderless">
				<tr>
		      <td><label for="pass_baru">Password baru</label></td><td>:</td>
					<td>
            <input type="hidden" name="id" value="<?php echo $id ?>" class="form-control">
            <input type="password" name="pass_baru" id="pass_baru" class="form-control" required/>
          </td>
				</tr>
				<tr>
					<td><label for="konf_pass">Konfimasi Password</label></td><td>:</td>
					<td><input type="password" name="konf_pass" id="konf_pass" class="form-control" required/></td>
				</tr>
					<td></td><td></td>
					<td>
		        <input type="submit" value="submit" class="btn btn-success"/>
		      </td>
		    </tr>
	  </table>
    </form>
	</div>
</div>
