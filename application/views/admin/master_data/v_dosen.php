<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Dosen</h3></legend>
      <?php echo anchor('admin/c_master_data/tambah_dosen', 'Tambah Dosen', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>

    <div clas="row">
      <div class="col-md-12 col-xs-12">
        <table class="table table-striped table-datatable">
          <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>NIP</th>
            <th>Nama Dosen</th>
            <th>Aksi</th>
          </tr>
          </thead>           
          <tfoot>
            <tr>
              <th></th>
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
              <td class="col-md-3"><?php echo $u->nip ?></td>
              <td class="col-md-10"><?php echo $u->nama ?></td>
              <td style="min-width: 120px">
                <a href="<?php echo base_url();?>admin/c_master_data/edit_dosen/<?php print($u->id_dosen);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-edit" />
                </a>
                <a href="<?php echo base_url();?>admin/c_master_data/do_delete_dosen/<?php print($u->id_dosen);?>" title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus <?php print($u->nama); ?> dari daftar dosen?');" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
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
</div>
