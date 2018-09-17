<div class="container">
  <h3>Tambah Bahan</h3>
  <br />

  <div class="col-md-5">
    <?php echo validation_errors(); ?>
    <form action="<?php echo base_url();?>admin/c_peminjaman/do_add_bahan" method="post" enctype="multipart/form-data" runat="server">
      <table class="table table-borderless">
        <tr>
          <td>Nama Bahan</td>
          <td><input type="text" class="form-control" id="nama_bahan" name="nama_bahan" required></td>
        </tr>

        <tr>
          <td>Spesifikasi</td>
          <td><input type="text" class="form-control" id="spesifikasi" name="spesifikasi" required></td>
        </tr>

        <tr>
          <td>Satuan Bahan</td>
          <td><input type="text" class="form-control" id="satuan_bahan" name="satuan_bahan" required></td>
        </tr>
                
        <tr>
          <td>Kondisi Bahan</td>
          <td><input type="text" class="form-control" id="kondisi" name="kondisi" required></td>
        </tr>

        <tr>
          <td>Persediaan</td>
          <td>
            <input type="text" class="form-control" id="stok" name="stok" placeholder="Persediaan" required>
            <input type="text" class="form-control" id="ukuran" name="ukuran" placeholder="Ukuran" required>
          </td>
        </tr>
        
        <tr>
          <td>LDKB</td>
          <td>
            <input type="file" accept=".pdf" id="ldkb" name="ldkb" required>
          </td>
        </tr>

        <tr>
          <td></td>
          <td class="text-right">
            <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
            <input type="submit" value="Submit" class="btn btn-success" style="width: 120px; height: 30px" />
          </td>
        </tr>
      </table>
  	</form>
  </div>
</div>
