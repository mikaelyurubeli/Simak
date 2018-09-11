<div class="container">

  <h3>Tambah Master Data</h3>
  <?php foreach($data as $u){ ?>
  <div class="col-md-6" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_master_data/update_masterdata" method="post">
      <input type="hidden" name="id_master" value="<?php echo $u->id_master ?>">
      <table class="table table-borderless">
        <tr>
          <td>Semester</td>
          <td>
            <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $u->semester ?>" >
          </td>
        </tr>
        <tr>
          <td>Tahun Akademik</td>
          <td>
            <select name="tahun_akademik" class="form-control" required><option value=""> - Tahun Akademik - </option>
              <?php
                $thn  = array('2015/2016', '2016/2017','2017/2018', '2018/2019', '2019/2020', '2020/2021');
                
                for ($i = 0; $i < sizeof($thn); $i++) {
                  if ($thn[$i] == $u->tahun_akademik) {
                    echo "<option selected value='".$thn[$i]."'>".$thn[$i]."</option>";
                  } else {
                    echo "<option value='".$thn[$i]."'>".$thn[$i]."</option>";
                  }       
                }     
              ?>      
              </select>
          </td>
        </tr>
        <tr>
          <td>Pendaftaran Praktikum</td>
          <td>
            <select class="form-control"  id="daftar_praktikum" name="daftar_praktikum" required>
            <?php 
              if ($u->daftar_praktikum == "Buka") {
                echo "<option selected value='Buka'>Buka</option>";
                echo "<option value='Tutup'>Tutup</option>";
              } else {
                echo "<option value='Buka'>Buka</option>";
                echo "<option selected value='Tutup'>Tutup</option>";
              }
            ?>
            </select>
          </td>
        </tr>

        <tr>
          <td></td>
					<td><input type="submit" value="Simpan" class="btn btn-success"></td>
				</tr>
      </table>
  	</form>
  </div>
</div>
<?php } ?>