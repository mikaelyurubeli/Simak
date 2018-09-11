<div class="container mains">
	<h3>Edit Data User</h3>
	<div class="col-md-6" style="margin-top: 2%; margin-left: 5%">
		</center>
		<?php foreach($mahasiswa as $u){ ?>
		<form action="<?php echo base_url(). 'mahasiswa/c_mhs/update_data'; ?>" enctype="multipart/form-data" method="post" runat="server">
			<table class="table table-borderless">
				<tr>
					<td>Nama</td><td>:</td>
					<td>
						<input type="hidden" name="id_user" value="<?php echo $u->id_user ?>" class="form-control">
            <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control">
					</td>
				</tr>
				<tr>
					<td>Noreg</td><td>:</td>
					<td><input type="text" name="noreg" value="<?php echo $u->noreg ?>" class="form-control"></td>
				</tr>
				<tr>
          <td>Program Studi</td><td>:</td>
          <td><input type="text" name="program_studi" value="<?php echo $u->program_studi ?>" class="form-control"></td>
        </tr>
        <tr>
          <td>Tahun Angkatan</td><td>:</td>
          <td>
						<select class="form-control" id="tahun_angkatan" name="tahun_angkatan" required>
              <option value='<?php echo $u->id_tahun ?>'><?php echo $u->tahun_angkatan ?></option>
              <?php foreach($tahun->result() as $row)  { ?>
                <?php echo "<option value='".$row->id_tahun."'>".$row->tahun_angkatan."</option>";
               } ?>
           </select>
					</td>
        </tr>
				<tr>
					<td>Email</td><td>:</td>
					<td><input type="text" name="email" value="<?php echo $u->email ?>" class="form-control"></td>
				</tr>
				<tr>
          <td>Alamat</td><td>:</td>
          <td><input type="text" name="alamat" value="<?php echo $u->alamat ?>" class="form-control"></td>
        </tr>
        <tr>
          <td>No HP</td><td>:</td>
          <td><input type="text" name="no_hp" value="<?php echo $u->no_hp ?>" class="form-control" required></td>
        </tr>
				<!--<tr>
					<td>Foto</td><td>:</td>
					<td><image src="<?php echo base_url();?><?php echo $u->url_foto?>" width="70px" height="auto"></image></td>
					<td><input type='file' id="url_foto" name="url_foto" value="<?php echo base_url();?><?php echo $u->url_foto ?>"/>
    			<img id="img_v" src="<?php echo base_url();?><?php echo $u->url_foto?>" alt="your image" width="70px" height="auto"/></td>
				</tr>-->
				<tr style="border-top: 2px solid #f5f5f5">
					<td></td><td></td>
					<td class="text-right">
							<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default" style="width: 150px"/>
							<input type="submit" value="Simpan" class="btn btn-success" style="width: 150px" />
					</td>
				</tr>
			</table>
		</form>
		<?php } ?>
	</div>
</div>

<script>
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_v').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#url_foto").change(function(){
    readURL(this);
});
</script>
