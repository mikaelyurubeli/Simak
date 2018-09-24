<div class="container-fluid" style="border: 1px solid #dfdfdf">
	<div class="row">
		<div class="col-md-12 col-xs-12 text-center">
			<h3 class="mb--10">Daftar Alat Pecah</h3>
			<form action="<?php echo base_url(); ?>mahasiswa/c_praktikum/lihat_daftar_alat_pecah" method="post">
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
			<hr>
		</div>
	</div>
			
	<div class="row">
		<div class="col-md-12">
            <?php
            if(empty($data)){
                echo "<center><h4>Pilih semester untuk melihat daftar alat pecah!</h4></center><br />";
            } else {
            ?>
            <center><strong><h3>Daftar Alat Pecah Semester <?php if ($smt != null) {echo $smt;} ?>, Tahun Akademik <?php if ($tahun_akademik != null) {echo $tahun_akademik;} ?></h3></strong></center>
            <br />
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>No Registrasi</th>
                        <th>Praktikum</th>
                        <th>Alat Pecah</th>
                        <th>Spesifikasi</th>
                        <th>Jumlah</th>
                    <tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                foreach($data as $u) {
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $u['nama'] ?></td>
                        <td><?php echo $u['noreg'] ?></td>
                        <td><?php foreach($u['praktikum'] as $x){ echo $x."<br />"; }?></td>
                        <td><?php foreach($u['nama_alat_pecah'] as $x){ echo $x."<br />"; }?></td>
                        <td><?php foreach($u['spesifikasi'] as $x){ echo $x."<br />"; }?></td>
                        <td><?php foreach($u['jumlah'] as $x){ echo $x."<br />"; }?></td>
                    </tr>
	            <?php } ?>
                </tbody>
	    	</table>
        <?php } ?>
		</div>
	</div>
</div>
