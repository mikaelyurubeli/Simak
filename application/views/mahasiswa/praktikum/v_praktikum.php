<div class="container-fluid" style="border: 1px solid #dfdfdf">
	<div class="row">
		<div class="col-md-12 col-xs-12 text-center">
			<h3 class="mb--10">Jadwal Praktikum</h3>
			<form action="<?php echo base_url(); ?>mahasiswa/c_praktikum/lihat_praktikum" method="post">
					<div class="row">
					<center>
					<?php 
						$js='id="pilihsmt" name="semester" class="form-control mb--10 text-center" style="width: 160px"'; 
						echo form_dropdown('pilihsmt', $list_semester, set_value('pilihsmt'), $js);
					?>
					</center>
					</div>
					<div class="row">
						<button class="btn btn-default" type="submit" name="submit" style="width: 160px">Lihat</button>
					</div>
			</form>
			<hr><br>
		</div>
	</div>
			
	<div class="row">
		<div class="col-md-12 ">
			<?php
	      if(empty($jadwal)){
	        echo "<center><h4>Belum ada jadwal untuk semester ini!</h4></center>";
	      } else {
	    ?>
				<table class="table table-stripped">
	        <tr>
	          <th>No</th>
	          <th>Kode</th>
	          <th>Praktikum</th>
	          <th>Dosen</th>
	          <th>Hari / Jam</th>
	          <th>Lokasi</th>
	        <tr>
	        <?php
	          $no = 1;
	          foreach($jadwal as $u) {
	        ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $u->kode_praktikum ?></td>
							<td><?php echo $u->nama_praktikum ?></td>
							<td><?php echo $u->dosen ?></td>
							<td><?php echo $u->hari," / ",$u->jam ?></td>
							<td><?php echo $u->lokasi ?></td>
						</tr>
	        <?php } ?>
					<?php } ?>
	    	</table>
		</div>
	</div>
</div>
