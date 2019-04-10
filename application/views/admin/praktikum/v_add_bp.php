<div class="container">

  <h3>Tambah Buku Panduan Praktikum</h3>

  <div class="col-md-5" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_praktikum/do_add_bp" method="post" enctype="multipart/form-data" runat="server">
      <table class="table table-borderless">
        <tr>
          <td width="140px">Nama Praktikum</td>          
          <td>
            <select class="form-control mb--10" id="nama_praktikum" name="nama_praktikum" required>
              <option value=''>--- Nama Praktikum ---</option>
              <?php foreach($nama_praktikum->result() as $row)  { ?>
                <?php echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
               } ?>
            </select>
          </td>
        </tr>

        <tr>
          <td>Buku Panduan</td>
          <td>
            <input type="file" accept=".pdf" id="url_file" name="url_file">
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