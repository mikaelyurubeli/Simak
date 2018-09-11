<div class="container">
<h3>Edit Form Pendaftaran Asisten</h3>  
	<?php foreach($asisten as $u){ ?>
	<div class="col-md-6" style="margin-top: 2%">
	<form action="<?php echo base_url(). 'admin/c_asisten/update_asisten'; ?>" method="post">
		<table class="table table-borderless">
			<tr>
				<td width="140px">Pilihan Praktikum 1</td>
				<td width="250px">
					<input type="hidden" name="id_daftar" value="<?php echo $u->id_daftar ?>" class="form-control">
					<select class="form-control" id="pilihan_praktikum1" name="pilihan_praktikum1" required>
                        <option value='<?php echo $u->pilihan_praktikum1 ?>'><?php echo $u->pilihan_praktikum1 ?></option>
                        <?php foreach($praktikum->result() as $row)  { ?>
                            <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
                            } ?>
                    </select>
                </td>
			</tr>
			<tr>
				<td>Pilihan Praktikum 2</td>
				<td>
                <select class="form-control" id="pilihan_praktikum2" name="pilihan_praktikum2" required>
                    <option value='<?php echo $u->pilihan_praktikum2 ?>'><?php echo $u->pilihan_praktikum2 ?></option>
                    <?php foreach($praktikum->result() as $row)  { ?>
                        <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
                        } ?>
                </select>
                </td>
			</tr>
			<tr>
				<td>Pilihan Praktikum 3</td>
				<td>
                <select class="form-control" id="pilihan_praktikum3" name="pilihan_praktikum3" required>
                    <option value='<?php echo $u->pilihan_praktikum3 ?>'><?php echo $u->pilihan_praktikum3 ?></option>
                    <?php foreach($praktikum->result() as $row)  { ?>
                        <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
                        } ?>
                </select>
                </td>
			</tr>
            <tr>
				<td>Jam Kosong</td>
				<td>
                    <select class="form-control" name="jam_kosong" id="jam_kosong" required>
                        <option value="<?php echo $u->jam_kosong ?>"><?php echo $u->jam_kosong ?></option>
                        <option value="Senin I (08:00-12:00)">Senin I (08:00-12:00)</option>
                        <option value="Senin II (13:00:16:00)">Senin II (13:00-16:00)</option>
                        <option value="Senin (full day)">Senin (full day)</option>
                        <option value="Selasa I (08:00-12:00)">Selasa I (08:00-12:00)</option>
                        <option value="Selasa II (13:00:16:00)">Selasa II (13:00-16:00)</option>
                        <option value="Selasa (full day)">Selasa (full day)</option>
                        <option value="Rabu I (08:00-12:00)">Rabu I (08:00-12:00)</option>
                        <option value="Rabu II (13:00:16:00)">Rabu II (13:00-16:00)</option>
                        <option value="Rabu (full day)">Rabu (full day)</option>
                        <option value="Kamis I (08:00-12:00)">Kamis I (08:00-12:00)</option>
                        <option value="Kamis II (13:00:16:00)">Kamis II (13:00-16:00)</option>
                        <option value="Kamis (full day)">Kamis (full day)</option>
                        <option value="Jumat I (08:00-12:00)">Jumat I (08:00-12:00)</option>
                        <option value="Jumat II (13:00:16:00)">Jumat II (13:00-16:00)</option>
                        <option value="Jumat (full day)">Jumat (full day)</option>
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
	<?php } ?>

</div>
