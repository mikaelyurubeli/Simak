<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Alat Kaca</h3></legend>
      <?php echo anchor('admin/c_peminjaman/alat','Tambah Alat', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Nama Alat</th>
            <th>Spesifikasi</th>
            <th>Kondisi</th>
            <th>Jumlah</th>
            <th>SOP/IK</th>
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
            <th></th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          foreach($alat as $u){
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama_alat ?></td>
            <td><?php echo $u->spesifikasi ?></td>
            <td><?php echo $u->kondisi ?></td>
            <td><?php echo $u->jumlah ?></td>
            <td>
              <?php if ($u->sop != null) { ?><a href="<?php echo base_url();?><?php echo $u->sop ?>" target="_self">Download file SOP/IK</a><?php } else { ?> Tidak ada file <?php } ?>
            </td>
            <td>
              <a href="<?php echo base_url();?>admin/c_peminjaman/edit_alat/<?php print($u->id_alat);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-edit" />
              </a>
              <a href="<?php echo base_url();?>admin/c_peminjaman/do_delete_alat/<?php print($u->id_alat);?>" title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus <?php echo $u->nama_alat?> ?');" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-trash" />
              </a>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
