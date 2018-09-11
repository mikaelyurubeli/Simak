<div class="container">

  <h3>Tambah Matakuliah Praktikum</h3>

  <div class="col-md-6" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/do_add_praktikum" method="post">
      <table class="table table-borderless">
        <tr>
          <td width="180px">Nama Praktikum</td>
          <td>
            <select class="form-control" id="nama_praktikum" name="nama_praktikum" required>
              <option value=''>--- Nama Praktikum ---</option>
              <?php foreach($nama_praktikum->result() as $row)  { ?>
                <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
               } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Dosen</td>
          <td>
            <select class="form-control" id="dosen" name="dosen" required>
              <option value=''>--- Dosen ---</option>
              <?php foreach($dosen->result() as $row)  { ?>
                <?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
               } ?>
            </select>
          </td>
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
          <td>Prasyarat</td>
          <td>
            <select class="form-control" id="prasyarat" name="prasyarat" required>
              <option value="None">None</option>
              <?php foreach($nama_praktikum->result() as $row)  { ?>
                <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
               } ?>
            </select>
          </td>
        </tr>
        <tr>
          <td>Kode Praktikum</td>
          <td><input type="text" class="form-control" id="kode_praktikum" name="kode_praktikum" required></td>
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
</div>
