<div class="container-fluid mains">
	<h3>Data User:</h3>
	<div class="col-md-6" style="margin-top: 2%; margin-left: 5%">
    <form role="form" action="<?php echo base_url();?>mahasiswa/c_mhs/edit_pass" method="post">
		<table class="table">
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
