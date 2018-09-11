<div class="container-fluid mains">
	<h3>Penelitian AAS:</h3>

	<div class="container margs">
	<form action="<?php echo base_url();?>mahasiswa/C_penelitian/do_penelitian_aas" enctype="multipart/form-data" method="post" target="_blank">

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="judul_penelitian" class="control-label">Judul Penelitian:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input class="form-control" name="judul_penelitian" type="text" id="judul_penelitian" required></input>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="tgl_penelitian" class="control-label">Tanggal Pelaksanaan:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input id="datepicker" type="text" class="form-control" name="tgl_penelitian" required/>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="jumlah_sampel" class="control-label">Jumlah Sampel:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input class="form-control" name="jumlah_sampel" type="text" id="jumlah_sampel" required>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="uji_logam" class="control-label">Uji Penentuan Logam:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input class="form-control" name="uji_logam" type="text" id="uji_logam" required>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label class="control-label">Pembimbing 1</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<select class="form-control" id="pembimbing1" name="pembimbing1" required>
						<option value=''>--- Pembimbing 1 ---</option>
						<?php foreach($dosen->result() as $row)  { ?>
						<?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
						} ?>
					</select>
				</div>
			</div>
		</div>

		<div class="form-group" >
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label class="control-label">Pembimbing 2</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<select class="form-control" id="pembimbing2" name="pembimbing2" required>
						<option value=''>--- Pembimbing 2 ---</option>
						<?php foreach($dosen->result() as $row)  { ?>
						<?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
						} ?>
					</select>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-1 col-xs-3 col-md-offset-5">
					<button type="submit" class="btn btn-primary form-control">Submit</button>
				</div>
			</div>
		</div>

		<input name="tgl_buat_surat" type="hidden" id="tgl_buat_surat"
			value="<?php $array_bulan = array(1=>'Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
			$bulan = $array_bulan[date('n')];
			$tgl = date('j');
			$thn = date('Y');
			echo $tgl.' '.$bulan.' '.$thn;
			?>">

	</form>
	</div>
</div>
