<div class="container">
  <h3>Tambah Daftar Alat Pecah</h3>
  <br />
  <div class="col-md-5">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/do_add_daftar_alat_pecah" method="post">
      <table class="table table-borderless">
        <tr>
          <td>Nama</td>
          <td><input type="text" class="form-control" id="nama" name="nama" required></td>
        </tr>
        <tr>
          <td>No Registrasi</td>
          <td><input type="text" class="form-control" id="noreg" name="noreg" required></td>
        </tr>
        
        <tr>
          <td>Praktikum</td>
          <td><input type="text" class="form-control" id="praktikum" name="praktikum" required></td>
        </tr>

        <tr>
          <td>Alat Pecah</td>
          <td><input type="text" class="form-control" id="alat_pecah" name="alat_pecah" required></td>
        </tr>
        
        <tr>
          <td>Spesifikasi</td>
          <td><input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required></td>
        </tr>
  
        <tr>
          <td>Jumlah</td>
          <td><input type="text" class="form-control" id="jumlah" name="jumlah" required></td>
        </tr>
        
        <tr>
          <td>Semester</td>
          <td>
            <select class="form-control" id="semester" name="semester" required>
              <option value=''>--- semester ---</option>
              <?php foreach($semester->result() as $row)  { ?>
                <?php echo "<option value='".$row->semester."'>".$row->semester."</option>";
               } ?>
            </select>
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
</div>
