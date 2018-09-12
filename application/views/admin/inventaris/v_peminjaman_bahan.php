<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Peminjaman Bahan Kimia</h3></legend><br/>
    </div>
  </div>

  <?php
    if(empty($hasil)){
      echo "<div class='text-center'>Belum ada peminjaman bahan kimia!</div>";        
    } else { ?>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-striped table-datatable">
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
                  <a href="<?php echo base_url();?>admin/c_peminjaman/daftar_peminjaman_bahan/<?php print($u->id_peminjaman);?>" title="Lihat Daftar Bahan" class="btn btn-success" data-toggle="tooltip" data-placement="bottom">
                    <span class="glyphicon glyphicon-search" />
                  </a>
                </td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php } ?>
</div>
