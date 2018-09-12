<div class="container">
<h3>Edit Data Bahan</h3>
	</center>
	<?php foreach($bahan as $u){ ?>
	<div class="col-md-6" style="margin-top: 2%">
	<form action="<?php echo base_url(). 'admin/c_peminjaman/update_bahan'; ?>" method="post">
		<table class="table table-borderless">
			<tr>
				<td>Nama Bahan</td>
				<td>
					<input type="hidden" name="id_bahan" value="<?php echo $u->id_bahan ?>" class="form-control">
					<input type="text" name="nama_bahan" value="<?php echo $u->nama_bahan ?>" class="form-control" required>
				</td>
			</tr>
			<tr>
				<td>Spesifikasi</td>
				<td><input type="text" name="spesifikasi" value="<?php echo $u->spesifikasi ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Satuan Bahan</td>
				<td><input type="text" name="satuan_bahan" value="<?php echo $u->satuan_bahan ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Kondisi Bahan</td>
				<td><input type="text" name="kondisi" value="<?php echo $u->kondisi ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Persediaan</td>
				<td>
					<input type="text" name="stok" value="<?php echo $u->stok ?>" class="form-control" placeholder="Ketersediaan" title="Ketersediaan" data-toggle="tooltip" data-placement="right" required>
					<input type="text" name="ukuran" value="<?php echo $u->ukuran ?>" class="form-control" placeholder="Ukuran" title="Ukuran Keseluruhan" data-toggle="tooltip" data-placement="right" required>
				</td>
			</tr>
			<tr>
				<td></td>
				<td class="text-right">
					<input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
         			<input type="submit" value="Simpan" class="btn btn-success" style="width: 120px; height: 30px">
				</td>
			</tr>
		</table>
	</form>
	</div>
	<?php } ?>

</div>
