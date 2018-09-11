<div class="container">
  <h3>Tambah Jadwal</h3>
  <div class="col-md-7" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/do_add_jadwal" method="post">
      <table class="table table-borderless">
        <tr>
          <td width="180px">Nama Praktikum</td>
          <td>
            <select class="form-control" id="praktikum" name="praktikum" required>
              <option value=''>--- Praktikum ---</option>
              <?php foreach($hasil_praktikum->result() as $row)  { ?>
                <?php echo "<option value='".$row->id_praktikum."'>".$row->nama_praktikum." - ".$row->kode_praktikum." (".$row->dosen.")</option>";
               } ?>
            </select>
          </td>
        </tr>

        <tr>
          <td>Hari</td>
          <td>
            <select class="form-control" id="hari" name="hari" required>
              <option value=''>--- Hari ---</option>
              <?php foreach($hari->result() as $row)  { ?>
                <?php echo "<option value='".$row->nama_hari."'>".$row->nama_hari."</option>";
               } ?>
            </select>
          </td>
        </tr>

        <tr>
          <td>Jam</td>
          <td>
            <select class="form-control" name="jam" id="jam" required>
              <option value="">None</option>
              <option value="I (08:00-12:00)">I (08:00-12:00)</option>
              <option value="II (13:00-17:00)">II (13:00-17:00)</option>
              <option value="III (08:00-16:00)">III (08:00-16:00)</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>Lokasi</td>
          <td>
            <select class="form-control" name="lokasi" id="lokasi" required>
              <option value="">-- Pilih Lokasi --</option>
              <option value="LAB. KIMIA FISIK">LAB. KIMIA FISIK</option>
              <option value="LAB. KIMIA DASAR">LAB. KIMIA DASAR</option>
              <option value="LAB. KIMIA ANALITIK">LAB. KIMIA ANALITIK</option>
              <option value="LAB. KIMIA ORGANIK">LAB. KIMIA ORGANIK</option>
            </select>
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

</div>
