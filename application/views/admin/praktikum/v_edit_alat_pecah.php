<div class="container">
  <h3>Edit Daftar Alat Pecah</h3>
  <br />
  <div class="col-md-12">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/update_alat_pecah" method="post">
        
        <?php foreach($data as $u){ ?>    
        <div class="form-group">
            <div class="row colbox">
                <div class="col-md-2 col-sm-2">
                <label for="nama" class="control-label">Nama</label>
                </div>
                <div class="col-md-4 col-sm-4">
                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $u['id']?>" required>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $u['nama']?>" required>
                </div>
            </div>
        </div>

        <div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-sm-2">
              <label for="noreg" class="control-label">No Registrasi</label>
            </div>
            <div class="col-md-4 col-sm-4">
              <input type="text" class="form-control" id="noreg" name="noreg" value="<?php echo $u['noreg']?>" required>
            </div>
          </div>
        </div>
        
        <!--<div class="form-group">
          <div class="row colbox">
            <div class="col-md-2 col-sm-2">
              <label for="praktikum" class="control-label">Praktikum</label>
            </div>
            <div class="col-md-4 col-sm-4">
              <input type="text" class="form-control" id="praktikum" name="praktikum" value="<?php echo $u['praktikum']?>" required>
            </div>
          </div>
        </div>-->
        
        <?php if (count($u['nama_alat_pecah']) > 0) {?>
        <?php for ($i = 0; $i < count($u['nama_alat_pecah']); $i++) { echo 
        '<div class="field_wrapper_loop">
          <div class="form-group">
            <div class="row colbox">
              <div class="col-md-2 col-sm-2">
                <label for="nama_alat_pecah" class="control-label">Alat Pecah</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <input type="hidden" class="form-control" id="id_alat_pecah" name="id_alat_pecah[]" placeholder="Nama alat" value="'.$u["id_alat_pecah"][$i].'" required>
                <input type="text" class="form-control" id="praktikum" name="praktikum[]" placeholder="Nama praktikum" value="'.$u["praktikum"][$i].'" required>
                <input type="text" class="form-control" id="nama_alat_pecah" name="nama_alat_pecah[]" placeholder="Nama alat" value="'.$u["nama_alat_pecah"][$i].'" required>
                <input type="text" class="form-control" id="jumlah" name="jumlah[]" placeholder="Jumlah alat" value="'.$u["jumlah"][$i].'" required>
                <input type="text" class="form-control" id="spesifikasi" name="spesifikasi[]" placeholder="Spesifikasi alat" value="'.$u["spesifikasi"][$i].'" required>
              </div>
              <a href="javascript:void(0);" class="add_button" title="Add field"><span class="glyphicon glyphicon-plus"></span></a>
            </div>
          </div>
        </div>';
        } ?>
        <?php } ?>

        <div id="field_wrapper" class="field_wrapper">
          <div class="form-group hidden">
            <div class="row colbox">
              <div class="col-md-2 col-sm-2">
                <label for="alat_pecah" class="control-label">Alat Pecah</label>
              </div>
              <div class="col-md-4 col-sm-4">
                <input type="text" class="form-control" id="add_praktikum" name="add_praktikum[]" placeholder="Nama praktikum">
                <input type="text" class="form-control" id="add_alat_pecah" name="add_alat_pecah[]" placeholder="Nama alat">
                <input type="text" class="form-control" id="add_jumlah" name="add_jumlah[]" placeholder="Jumlah alat">
                <input type="text" class="form-control" id="add_spesifikasi" name="add_spesifikasi[]" placeholder="Spesifikasi alat">
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
                <option value='<?php echo $u['semester'] ?>'><?php echo $u['semester'] ?></option>
                <?php foreach($semester->result() as $row)  { ?>
                  <?php echo "<option value='".$row->semester."'>".$row->semester."</option>";
                } ?>
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="row colbox">
            <div class="col-md-4 col-xs-5 col-md-offset-2 text-right">
					    <button onclick="window.history.go(-1); return false;" class="btn btn-default" style="width: 120px; height: 30px">Back</button>
              <button type="submit" class="btn btn-primary" onClick="return doconfirm2();" style="width: 120px; height: 30px">Submit</button>
            </div>
          </div>
        </div>
        <?php }?>
  	</form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
    var maxField = 20; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('#field_wrapper'); //Input field wrapper
    var count = 1;
    var fieldHTML ='<div class="field_wrapper"><div class="form-group"><div class="row colbox"><div class="col-md-2 col-sm-2"><label for="alat_pecah" class="control-label">Data Alat Pecah</label></div><div class="col-md-4 col-sm-4"><input type="text" class="form-control" id="add_praktikum" name="add_praktikum[]" placeholder="Nama praktikum" required><input type="text" class="form-control" id="add_alat_pecah" name="add_alat_pecah[]" placeholder="Nama alat" required><input type="text" class="form-control" id="add_jumlah" name="add_jumlah[]" placeholder="Jumlah alat" required><input type="text" class="form-control" id="add_spesifikasi" name="add_spesifikasi[]" placeholder="Spesifikasi alat" required></div><a href="javascript:void(0);" class="remove_button" title="Remove field"><span class="glyphicon glyphicon-minus"></span></a></div></div></div>'; //New input field html
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