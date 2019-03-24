<div class="container">
<h3>Edit Data Alat Kaca</h3>
	</center>
	<?php foreach($alat as $u){ ?>
	<div class="col-md-5" style="margin-top: 2%">
	<form action="<?php echo base_url(). 'admin/c_peminjaman/update_alat'; ?>" method="post" enctype="multipart/form-data" runat="server">
		<table class="table table-borderless">
			<tr>
				<td style="min-width: 150px">Nama Alat</td>
				<td>
					<input type="hidden" name="id_alat" value="<?php echo $u->id_alat ?>" class="form-control">
					<input type="text" name="nama_alat" value="<?php echo $u->nama_alat ?>" class="form-control" required>
				</td>
			</tr>
			<tr>
				<td>Spesifikasi</td>
				<td><input type="text" name="spesifikasi" value="<?php echo $u->spesifikasi ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Kondisi Alat</td>
				<td><input type="text" name="kondisi" value="<?php echo $u->kondisi ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>Jumlah Alat</td>
				<td><input type="text" name="jumlah" value="<?php echo $u->jumlah ?>" class="form-control" required></td>
			</tr>
			<tr>
				<td>SOP/IK</td>
				<td>
					<input type="file" accept=".pdf" id="sop" name="sop" >
					<p style="font-size: 12px; color: grey">*pilih file hanya jika akan merubah file SOP/IK, file tetap sama jika tidak memilih file baru</p>
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
