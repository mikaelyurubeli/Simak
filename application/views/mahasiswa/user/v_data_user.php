<div class="container-fluid mains">
	<h3>Data User:</h3>
	<?php foreach($mahasiswa as $u) { ?>

	<div class="col-md-2" style="margin-top: 2%;  margin-left: 5%">
		<tr>
			<td>
				<center>
					<image src="<?php echo base_url();?><?php echo $u->url_foto?>" width="100px" height="auto"></image>
				</center>
			</td>
		</tr>
	</div>
	<div class="col-md-6" style="margin-top: 2%">
		<table class="table">
		    <tr>
		      <td>Nama</td><td>:</td>
		      <td><?php echo $u->nama ?></td>
				</tr>
				<tr>
		      <td>No Registrasi</td><td>:</td>
		      <td><?php echo $u->noreg ?></td>
				</tr>
				<tr>
		      <td>Program Studi</td><td>:</td>
		      <td><?php echo $u->program_studi ?></td>
				</tr>
				<tr>
					<td>Tahun Angkatan</td><td>:</td>
		      <td><?php echo $u->tahun_angkatan ?></td>
				</tr>
				<tr>
		      <td>Email</td><td>:</td>
					<td><?php echo $u->email ?></td>
				</tr>
				<tr>
		      <td>Alamat</td><td>:</td>
					<td><?php echo $u->alamat ?></td>
				</tr>
				<tr>
		      <td>No HP</td><td>:</td>
					<td><?php echo $u->no_hp ?></td>
				</tr>
					<td></td><td></td>
					<td>
						<?php echo anchor('mahasiswa/c_mhs/edit_user/'.$u->id_user,'Edit Data', array('class' => 'btn btn-success')); ?>
		        <?php echo anchor('mahasiswa/c_mhs/ubah_pass/'.$u->id_user,'Ubah Password', array('class' => 'btn btn-success')); ?>
		      </td>
		    </tr>

	  </table>
	</div>
	<?php } ?>
</div>
