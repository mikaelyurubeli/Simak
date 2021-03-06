<div class="container-fluid mains">
	<h3>Surat Izin Lembur</h3>

	<div class="container margs">
	<form action="<?php echo base_url();?>mahasiswa/C_penelitian/do_surat_izin" enctype="multipart/form-data" method="post" target="_blank">
		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="judul_penelitian" class="control-label">Judul Penelitian</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="text" class="form-control" name="judul_penelitian" required/>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="tgl_penelitian" class="control-label">Tanggal Pelaksanaan</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input id="datepicker" type="text" class="form-control" name="tgl_penelitian" required/>
				</div>
			</div>
		</div>
				
		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="tgl_penelitian" class="control-label">Instansi / Fakultas / Prodi</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="text" class="form-control" name="instansi" required/>
				</div>
			</div>
		</div>
        
		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="tgl_penelitian" class="control-label">Jam Mulai</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required/>
				</div>
				<div class="col-md-4">
					<p style="font-size: 12px; color: grey">*contoh format jam 10:00 AM (sepuluh pagi) atau 10:00 PM (sepuluh malam)</p>
				</div>
			</div>
		</div>
        
		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="tgl_penelitian" class="control-label">Jam Selesai</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="time" class="form-control" id="jam_selesai" name="jam_selesai" required/>
				</div>
			</div>
		</div>
		
		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label for="tgl_penelitian" class="control-label">Orang Tua / Wali</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<input type="text" class="form-control" id="orang_tua" name="orang_tua" required/>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-3 col-sm-4">
					<label class="control-label">Pembimbing 1</label>
				</div>
				<div class="col-md-4 col-sm-6">
					<select class="form-control" id="pembimbing1" name="pembimbing1" required style="margin-bottom: 15px">
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
				<div class="col-md-3 col-sm-4">
					<label class="control-label">Pembimbing 2</label>
				</div>
				<div class="col-md-4 col-sm-6">
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
				<div class="col-md-2 col-sm-4 col-md-offset-5 col-sm-offset-6">
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
