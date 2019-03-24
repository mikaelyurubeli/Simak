<div class="container-fluid mains">
	<h3>Pendaftaran Asisten :</h3>
	<div class="container margs" style="margin-top: 2%;">
		<div class="col-md-12 col-xs-12">
			<form method="POST" action="<?php echo base_url();?>mahasiswa/c_asisten/do_daftar_asisten">

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="pilihan_praktikum1" class="control-label">Pilihan Praktikum 1</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" id="pilihan_praktikum1" name="pilihan_praktikum1" required>
							<option value=''>Pilihan Praktikum 1</option>
							<?php foreach($praktikum->result() as $row)  { ?>
								<?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
							 } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="asis_prak" class="control-label">Pilihan Praktikum 2</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" id="pilihan_praktikum2" name="pilihan_praktikum2" required>
							<option value=''>Pilihan Praktikum 2</option>
							<?php foreach($praktikum->result() as $row)  { ?>
								<?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
							 } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="asis_prak" class="control-label">Pilihan Praktikum 3</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" id="pilihan_praktikum3" name="pilihan_praktikum3" required>
							<option value=''>Pilihan Praktikum 3</option>
							<?php foreach($praktikum->result() as $row)  { ?>
								<?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
							 } ?>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="nil_prak" class="control-label">Nilai Praktikum Kimia Organik</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" name="nilai_praktikum" id="nilai_praktikum" required>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="A">A</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="B">B</option>
							<option value="C+">C+</option>
							<option value="C-">C-</option>
							<option value="C">C</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="smt" class="control-label">Semester</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" name="semester" id="semester" required>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
						</select>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="jam_kosong" class="control-label">Jam Kosong 1</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" name="jam_kosong" id="jam_kosong" required>
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
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="jam_kosong_2" class="control-label">Jam Kosong 2</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" name="jam_kosong_2" id="jam_kosong_2" required>
							<option value="-">None</option>
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
					</div>
				</div>
			</div>
			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label for="jam_kosong_3" class="control-label">Jam Kosong 3</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" name="jam_kosong_3" id="jam_kosong_3" required>
							<option value="-">None</option>
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
					</div>
				</div>
			</div>
		
			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-1 col-xs-3 col-md-offset-5">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
