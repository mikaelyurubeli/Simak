<div class="container">
  <div class="row" style="margin-bottom: 20px">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Peminjaman Alat Kimia</h3></legend>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-stripped table-datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>No Registrasi</th>
            <th>Mahasiswa</th>
            <th>Jenis Kegiatan</th>
            <th>Tanggal Peminjaman</th>
            <th>Aksi</th>
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
            <td><?php echo $u->jenis_kegiatan ?></td>
            <td><?php echo $u->tgl_peminjaman ?></td>
            <td>
              <a href="<?php echo base_url();?>kalab/c_peminjaman/daftar_peminjaman_alat/<?php print($u->id_peminjaman);?>" title="Lihat Daftar Alat" class="btn btn-success" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-search" />
              </a>
            </td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
