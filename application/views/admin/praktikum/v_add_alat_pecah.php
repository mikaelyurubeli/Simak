<div class="container">
  <h3>Tambah Daftar Alat Pecah</h3>
  <br />
  <div class="col-md-12">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/do_add_daftar_alat_pecah" method="post">

      <div class="form-group">
        <div class="row colbox">
          <div class="col-md-2 col-sm-2">
            <label for="nama" class="control-label">Nama</label>
          </div>
          <div class="col-md-4 col-sm-4">
            <input type="text" class="form-control" id="nama" name="nama" required>
          </div>
        </div>
      </div>

        <div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-sm-2">
              <label for="noreg" class="control-label">No Registrasi</label>
            </div>
            <div class="col-md-4 col-sm-4">
              <input type="text" class="form-control" id="noreg" name="noreg" required>
            </div>
          </div>
        </div>
        
        <!--<div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-sm-2">
              <label for="praktikum" class="control-label">Praktikum</label>
            </div>
            <div class="col-md-4 col-sm-4">
              <input type="text" class="form-control" id="praktikum" name="praktikum" required>
            </div>
          </div>
        </div>-->

        <div class="field_wrapper">
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-2 col-sm-2">
                <label for="alat_pecah" class="control-label">Data Alat Pecah</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <input type="text" class="form-control" id="praktikum" name="praktikum[]" placeholder="Nama praktikum" required>
                <input type="text" class="form-control" id="alat_pecah" name="alat_pecah[]" placeholder="Nama alat" required>
                <input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah alat" required>
                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi[]" placeholder="Spesifikasi alat" required>
              </div>
              <a href="javascript:void(0);" class="add_button" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-sm-2">
              <label for="jenis_kegiatan" class="control-label">Semester</label>
            </div>
            <div class="col-md-4 col-sm-4">
              <select class="form-control" id="semester" name="semester" required>
                <option value=''>--- semester ---</option>
                <?php foreach($semester->result() as $row)  { ?>
                  <?php echo "<option value='".$row->semester."'>".$row->semester."</option>";
                } ?>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-xs-3 col-md-offset-4">
              <button type="submit" class="btn btn-primary form-control" onClick="return doconfirm2();" >Submit</button>
            </div>
          </div>
        </div>

  	</form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
		var count = 1;
    var fieldHTML ='<div class="field_wrapper"><div class="form-group"><div class="row colbox"><div class="col-md-2 col-sm-2"><label for="alat_pecah" class="control-label">Data Alat Pecah</label></div><div class="col-md-4 col-sm-4"><input type="text" class="form-control" id="praktikum" name="praktikum[]" placeholder="Nama praktikum" required><input type="text" class="form-control" id="alat_pecah" name="alat_pecah[]" placeholder="Nama alat" required><input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah alat" required><input type="text" class="form-control" id="spesifikasi" name="spesifikasi" placeholder="Spesifikasi alat" required></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div></div></div>'; //New input field html
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