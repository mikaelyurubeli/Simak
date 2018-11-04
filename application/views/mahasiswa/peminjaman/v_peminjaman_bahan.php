<div class="container-fluid mains">
	<h3>Pemakaian bahan kimia:</h3>
	<div class="container margs">
	<form action="<?php echo base_url();?>mahasiswa/c_peminjaman/do_peminjaman_bahan" enctype="multipart/form-data" method="post" target="_blank">

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="jenis_kegiatan" class="control-label">Jenis Kegiatan:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input class="form-control" name="jenis_kegiatan" type="input" required>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-2 col-sm-2">
					<label for="tgl_peminjaman" class="control-label">Tanggal Pemakaian:</label>
				</div>
				<div class="col-md-4 col-sm-4">
					<input id="datepicker" class="form-control" name="tgl_peminjaman" required>
				</div>
			</div>
		</div>

		<div class="field_wrapper">
			<div class="form-group">
				<div class="row colbox">
					<div class="col-md-2 col-sm-2">
						<label class="control-label">Data Bahan:</label>
					</div>
					<div class="col-md-4 col-sm-4">
						<select class="form-control" id="id_bahan" name="id_bahan[]" required>
							<option value=''>--- Nama Bahan ---</option>
							<?php foreach($bahan as $row)  { ?>
								<?php echo "<option value='".$row->id_bahan."'>".$row->nama_bahan." ( ".$row->stok.'/'.$row->ukuran." $row->satuan_bahan)</option>";
							 } ?>
						</select><br>
						<input class="form-control" name="jumlah_bahan[]" type="number" id="jumlah_bahan" min="1" placeholder="Jumlah Bahan (satuan gram)" required>
					</div>
					<a href="javascript:void(0);" class="add_button" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
				</div>
			</div>
		</div>

		<div class="form-group">
			<div class="row colbox">
				<div class="col-md-1 col-xs-3 col-md-offset-5">
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

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
		var count = 1;

    var fieldHTML = '<div class="form-group"><div class="row colbox"><div class="col-md-2 col-sm-2"><label class="control-label">Data Bahan:</label></div><div class="col-md-4 col-sm-4"><select class="form-control" id="id_bahan" name="id_bahan[]" required><option value="">--- Nama Bahan ---</option><?php foreach($bahan as $row){ ?><?php echo '<option value="'.$row->id_bahan.'">'.$row->nama_bahan.' ('.$row->stok.' /'.$row->ukuran.')</option>';} ?>select><input style="margin-top: 5%" class="form-control" name="jumlah_bahan[]" type="number" min="1" id="jumlah" placeholder="Jumlah Bahan (satuan gram)" required></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div></div>'; //New input field html
		var x = 1; //Initial field counter is 1
    $(addButton).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
						count++;
            $(wrapper).append(fieldHTML); // Add field html
        }
    });
    $(wrapper).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
