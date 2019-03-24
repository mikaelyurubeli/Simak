<div class="container"> 
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Penelitian</h3></legend><br/>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-xs-12">
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th style="width: 10px !important">No</th>
            <th>No Registrasi</th>
            <th>Nama Mahasiswa</th>
            <th>Instansi / Fakultas / Prodi</th>
            <th>Judul Penelitian</th>
            <th>Tanggal Penelitian</th>
          </tr>
        </thead>           
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th> 
            <th></th> 
          </tr>
        </tfoot>
        <tbody>
          <?php
            $no = 1;
            foreach ($hasil as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->noreg ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->instansi ?></td>
            <td><?php echo $u->judul_penelitian ?></td>
            <td><?php echo $u->tgl_buat_surat ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
