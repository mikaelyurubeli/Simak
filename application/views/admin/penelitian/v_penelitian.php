<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <center><h3>Daftar Penelitian</h3></center><br/>
    </div>

    <div clas="row">
      <div class="col-md-12 col-xs-12">
        <table class="table table-striped table-datatable">
          <thead>
          <tr>
            <th style="width: 10px">No</th>
            <th>No Registrasi</th>
            <th>Nama Mahasiswa</th>
            <th>Judul Penelitian</th>
            <th>Tanggal Penelitian</th>
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
              <td class="col-md-2"><?php echo $u->noreg ?></td>
              <td class="col-md-2"><?php echo $u->nama ?></td>
              <td class="col-md-5"><?php echo $u->judul_penelitian ?></td>
              <td class="col-md-3"><?php echo $u->tgl_buat_surat ?></td>
              <td>
                <a href="<?php echo base_url();?>admin/c_penelitian/do_delete_penelitian/<?php print($u->id_penelitian);?>" onClick="return doconfirm();" title="Delete Data" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
                  <span class="glyphicon glyphicon-trash" />
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
    
  </div>
</div>
