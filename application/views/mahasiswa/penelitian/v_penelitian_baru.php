<div class="container-fluid mains">
	<h3>Penelitian :</h3>

	<div class="container margs">
	<form action="<?php echo base_url();?>mahasiswa/C_penelitian/do_penelitian" enctype="multipart/form-data" method="post" target="_blank">

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="judul_penelitian" class="control-label">Judul Penelitian:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input type="text" class="form-control" name="judul_penelitian" required/>
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
				<div class="col-md-2 col-md-offset-4">
					<button type="submit" class="btn btn-primary form-control" onClick="return doconfirm2();">Submit</button>
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
