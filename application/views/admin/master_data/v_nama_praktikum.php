<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Nama Praktikum</h3></legend>
      <?php echo anchor('admin/c_master_data/tambah_nama_praktikum', 'Tambah Nama Praktikum', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-xs-12">
      <table class="table table-striped table-datatable">
        <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Nama Praktikum</th>
          <th>Aksi</th>
        </tr>
        </thead>           
        <tfoot>
          <tr>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </tfoot>
        <tbody>
          <?php
            $no = 1;
            foreach ($data as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td class="col-md-10"><?php echo $u->nama_praktikum ?></td>
            <td>
              <a href="<?php echo base_url();?>admin/c_master_data/edit_nama_praktikum/<?php print($u->id_nama_prak);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                <span class="glyphicon glyphicon-edit" />
              </a>
              <a href="<?php echo base_url();?>admin/c_master_data/do_delete_nama_praktikum/<?php print($u->id_nama_prak);?>" title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus <?php print($u->nama_praktikum); ?> dari daftar nama praktikum?');" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
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
