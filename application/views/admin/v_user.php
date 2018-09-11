<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Pengguna</h3></legend>
      <?php echo anchor('admin/c_user/add_user','Tambah Data', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>
  </div>

  <div class="row">  
    <div class="col-md-12" style="margin-bottom: 1%;">
      <table class="table table-striped table-datatable">
        <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>Username</th>
            <th>Level</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot>
          <tr>
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
            foreach ($tb_user as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->username ?></td>
            <td><?php echo $u->level ?></td>
            <td><?php if($u->status == 0 || 1){ print("Aktif"); } else {print("Tidak Aktif");} ?></td>          
            <td style="min-width: 150px">
              <center>
                <a href="<?php echo base_url();?>admin/c_user/edit_user/<?php print($u->id_user);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-edit" />
                </a>
                <a href="<?php echo base_url();?>admin/c_user/do_delete_user/<?php print($u->id_user);?>" title="Delete" onClick="return doconfirm();" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-trash" />
                </a>
                <a href="<?php echo base_url();?>admin/c_user/reset_pass/<?php print($u->id_user);?>" class="btn btn-success" title="Ubah Password" onClick="return confirm('Apakah anda yakin akan mereset password username: <?php print($u->username); ?> ?');" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-lock" />
                </a>
              </center>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div> 
  </div>
</div>