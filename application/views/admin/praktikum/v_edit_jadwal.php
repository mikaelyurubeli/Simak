<div class="container">
	<h3>Edit Data</h3>
	<div class="col-md-7" style="margin-top: 2%">
		</center>
		<?php foreach($jadwal as $u){ ?>
		<form action="<?php echo base_url(). 'admin/c_praktikum/update_jadwal'; ?>" method="post">
			<table class="table table-borderless">
				<tr>
					<td>Nama Praktikum</td>
					<td>
						<input type="hidden" name="id_jadwal" value="<?php echo $u->id_jadwal?>" class="form-control">
            <select class="form-control" id="praktikum" name="praktikum" required>
              <?php foreach($praktikum->result() as $row) { ?>
								<?php if($row->nama_praktikum == $u->nama_praktikum) {
									echo "<option selected value='".$row->id_praktikum."'>".$row->nama_praktikum." - ".$row->kode_praktikum." (".$row->dosen.")</option>";									
								} else {
									echo "<option value='".$row->id_praktikum."'>".$row->nama_praktikum." - ".$row->kode_praktikum." (".$row->dosen.")</option>";
								}
              } ?>
            </select>
          </td>
				</tr>
        <tr>
          <td>Hari</td>
          <td>
            <select class="form-control" id="hari" name="hari" required>
              <?php foreach($hari->result() as $row) { ?>
                <?php if ($row->nama_hari == $u->hari) { 
									echo "<option selected value='".$row->nama_hari."'>".$row->nama_hari."</option>";
								} else {
									echo "<option value='".$row->nama_hari."'>".$row->nama_hari."</option>";
								}
              } ?>
            </select>
          </td>
        </tr>
				<tr>
					<td>Jam</td>
					<td>
						<select class="form-control" name="jam" id="jam" required>
							<?php 
              if ($u->jam == "I (08:00-12:00)") {
                echo "<option selected value='I (08:00-12:00)'>I (08:00-12:00)</option>";
                echo "<option value='II (13:00-17:00)'>II (13:00-17:00)</option>";
                echo "<option value='III (08:00-16:00)'>III (08:00-16:00)</option>";
              } else if ($u->jam == "II (13:00-17:00)") {
                echo "<option value='I (08:00-12:00)'>I (08:00-12:00)</option>";
                echo "<option selected value='II (13:00-16:00)'>II (13:00-16:00)</option>";
                echo "<option value='III (08:00-16:00)'>III (08:00-16:00)</option>";
              }else if ($u->jam == "III (08:00-16:00)") {
                echo "<option value='I (08:00-12:00)'>I (08:00-12:00)</option>";
                echo "<option value='II (13:00-16:00)'>II (13:00-16:00)</option>";
                echo "<option selected  value='III (08:00-16:00)'>III (08:00-16:00)</option>";
              }
            ?>
						</select>
					</td>
				</tr>

				<tr>
					<td>Lokasi</td>
					<td>
						<select class="form-control" name="lokasi" id="lokasi" required>
							<?php
                $lab  = array('LAB. KIMIA FISIK', 'LAB. KIMIA DASAR','LAB. KIMIA ANALITIK', 'LAB. KIMIA ORGANIK');
                
                for ($i = 0; $i < sizeof($lab); $i++) {
                  if ($lab[$i] == $u->lokasi) {
                    echo "<option selected value='".$lab[$i]."'>".$lab[$i]."</option>";
                  } else {
                    echo "<option value='".$lab[$i]."'>".$lab[$i]."</option>";
                  }       
                }     
              ?>  
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
		<?php } ?>
	</div>
</div>
