<div class="container mains">
  <h3 >Penelitian</h3>
	<div class="stepwizard col-md-offset-1" style="margin-top: 4%;">
		<div class="stepwizard-row setup-panel">
			<div class="stepwizard-step">
				<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
			</div>
			<div class="stepwizard-step">
				<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled>2</a>
			</div>
			<div class="stepwizard-step">
				<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled>3</a>
			</div>
		</div>
	</div>

	<form role="form" action="<?php echo base_url();?>mahasiswa/c_penelitian/add_penelitian" method="post">

	<div class="row setup-content" id="step-1">
		<div class="col-xs-6 col-md-offset-1">
			<div class="col-md-12">
			<center><h2>Data Penelitian</h2></center>
			
				<div class="form-group">
					<label class="control-label">Judul Penelitian</label>
					<input type="text" class="form-control" name="judul_penelitian" required/>
				</div>
				
				<div class="form-group">
					<label class="control-label">Tanggal Penelitian</label>
					<input id="datepicker" type="text" class="form-control" name="tgl_penelitian" required/>
				</div>
				
				<div class="form-group">
					<label class="control-label">Pembimbing 1</label>
				  <select class="form-control" id="pembimbing1" name="pembimbing1" required>
					<option value=''>--- Pembimbing 1 ---</option>
					<?php foreach($dosen->result() as $row)  { ?>
					  <?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
					 } ?>
				  </select>
				</div>
				
				<div class="form-group">
					<label class="control-label">Pembimbing 2</label>
					<select class="form-control" id="pembimbing2" name="pembimbing2" required>
						<option value=''>--- Pembimbing 2 ---</option>
						<?php foreach($dosen->result() as $row)  { ?>
						  <?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
						 } ?>
					</select>
				</div>
				
				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
			</div>
		</div>
	</div>

	<div class="row setup-content" id="step-2">
		<div class="col-xs-6 col-md-offset-1">
			<div class="col-md-12">
			<center><h2>Daftar Kebutuhan Alat</h2></center> <br>
        <div class="field_wrappera">
    			<div class="form-group">
    				<div class="row colbox">
    					<div class="col-md-3 col-sm-3">
    						<label class="control-label">Data Alat:</label>
    					</div>
    					<div class="col-md-8 col-sm-8">
                <select class="form-control" id="alat" name="alat" required>
                  <option value=''>--- Nama Alat ---</option>
                  <?php foreach($alat as $row)  { ?>
                    <?php echo "<option value='".$row->id_alat."'>".$row->nama_alat."</option>";
                   } ?>
                </select><br>
    						<input class="form-control" name="jumlah_alat" type="text" id="jumlah_alat" placeholder="Jumlah Alat" required>
    					</div>
    					<a href="javascript:void(0);" class="add_buttona" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
    				</div>
    			</div>
    		</div>
        <!--<div class="form-group col-md-8">
					<label class="control-label">Nama Alat</label>
          <select class="form-control" id="alat" name="alat" required>
            <option value=''>--- Nama Alat ---</option>
            <?php foreach($alat as $row)  { ?>
              <?php echo "<option value='".$row->id_alat."'>".$row->nama_alat."</option>";
             } ?>
          </select>
        </div>
        <div class="col-md-4">
          <label class="control-label">Jumlah Alat</label>
					<input type="text" class="form-control" name="jumlah" required/>
				</div>
-->
				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
			</div>
		</div>
	</div>

	<div class="row setup-content" id="step-3">
		<div class="col-xs-6 col-md-offset-1">
			<div class="col-md-12">
				<center><h2> Daftar Kebutuhan Bahan</h2><br></center>
        <div class="field_wrapperb">
    			<div class="form-group">
    				<div class="row colbox">
    					<div class="col-md-3 col-sm-3">
    						<label class="control-label">Data Bahan:</label>
    					</div>
    					<div class="col-md-8 col-sm-8">
                <select class="form-control" id="bahan" name="bahan" required>
                  <option value=''>--- Nama Bahan ---</option>
                  <?php foreach($bahan as $row)  { ?>
                    <?php echo "<option value='".$row->id_bahan."'>".$row->nama_bahan."</option>";
                   } ?>
                </select><br>
    						<input class="form-control" name="jumlah_bahan" type="text" id="jumlah_bahan" placeholder="Jumlah Bahan" required>
    					</div>
    					<a href="javascript:void(0);" class="add_buttonb" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
    				</div>
    			</div>
    		</div>
        <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
			</div>
		</div>
	</div>
	</form>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButtona = $('.add_buttona'); //Add button selector
    var addButtonb = $('.add_buttonb'); //Add button selector
    var wrappera = $('.field_wrappera'); //Input field wrapper
    var wrapperb = $('.field_wrapperb'); //Input field wrapper
		var count = 1;
    var fieldHTMLa = '<div class="form-group"><div class="row colbox"><div class="col-md-3 col-sm-3"><label class="control-label">Data Alat:</label></div><div class="col-md-8 col-sm-8"><select class="form-control" id="alat" name="alat" required><option value="">--- Nama Alat ---</option><?php foreach($alat as $row){ ?><?php echo '<option value="'.$row->id_alat.'">'.$row->nama_alat.'</option>';} ?>select><input style="margin-top: 5%" class="form-control" name="jumlah_alat" type="text" id="jumlah" placeholder="Jumlah Alat" required></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div></div>'; //New input field html
    var fieldHTMLb = '<div class="form-group"><div class="row colbox"><div class="col-md-3 col-sm-3"><label class="control-label">Data Bahan:</label></div><div class="col-md-8 col-sm-8"><select class="form-control" id="bahan" name="bahan" required><option value="">--- Nama Bahan ---</option><?php foreach($bahan as $row){ ?><?php echo '<option value="'.$row->id_bahan.'">'.$row->nama_bahan.'</option>';} ?>select><input style="margin-top: 5%" class="form-control" name="jumlah_bahan" type="text" id="jumlah" placeholder="Jumlah Bahan" required></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div></div>'; //New input field html
		var x = 1; //Initial field counter is 1
    $(addButtona).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
						count++;
            $(wrappera).append(fieldHTMLa); // Add field html
        }
    });
    $(addButtonb).click(function(){ //Once add button is clicked
        if(x < maxField){ //Check maximum number of input fields
            x++; //Increment field counter
            count++;
            $(wrapperb).append(fieldHTMLb); // Add field html
        }
    });
    $(wrappera).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
    $(wrapperb).on('click', '.remove_button', function(e){ //Once remove button is clicked
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
