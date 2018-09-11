<div class="container">
	<h3>Edit Data</h3>
	<div class="col-md-4" style="margin-top: 2%">
		</center>
		<?php foreach($tb_user as $u){ ?>
		<form action="<?php echo base_url(). 'admin/c_user/update_user'; ?>" method="post">
			<table class="table table-borderless">
				<tr>
					<td>Username</td><td>:</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>" class="form-control">
						<input type="text" name="username" value="<?php echo $u->username ?>" class="form-control" required>
					</td>
				</tr>
				<tr>
					<td>Level</td><td>:</td>
					<td>
						<select name="level" id="level" class="form-control">
							<option value="admin" <?php if($u->level=="admin") { echo 'selected'; } ?>>Administrator</option>
							<option value="mahasiswa" <?php if($u->level=="mahasiswa") { echo 'selected'; } ?>>Mahasiswa</option>
							<option value="kalab" <?php if($u->level=="kalab") { echo 'selected'; } ?>>Kalab</option>
						</select>
					</td>

				</tr>
				<tr>
					<td></td><td></td>
					<td><input type="submit" value="Simpan" class="btn btn-default"></td>
				</tr>
			</table>
		</form>
		<?php } ?>
	</div>
</div>
