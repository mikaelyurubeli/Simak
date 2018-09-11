<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center><h3>Daftar Bahan Kimia</h3></center>
    </div>
    <div class="col-md-12" style="margin-bottom: 1%;">
      <center><?php echo anchor('admin/c_peminjaman/bahan','Tambah Bahan', array('class' => 'btn btn-success btn-sm')); ?></center>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <table class="table table-striped table-datatable">
        <thead>
        <tr>
          <th style="width:10px">No</th>
          <th>Nama Alat</th>
          <th>Spesifikasi</th>
          <th>Persediaan</th>
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
        </tr>
        </tfoot>
        <tbody>
        <?php
        $no = 1;
        foreach($bahan as $u){
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->nama_bahan ?></td>
          <td><?php echo $u->spesifikasi ?></td>
          <td><?php echo $u->stok.' / '.$u->ukuran.' g' ?></td>
          <td>
            <a href="<?php echo base_url();?>admin/c_peminjaman/edit_bahan/<?php print($u->id_bahan);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
              <span class="glyphicon glyphicon-edit" />
            </a>
            <a href="<?php echo base_url();?>admin/c_peminjaman/do_delete_bahan/<?php print($u->id_bahan);?>" title="Delete" onClick="return doconfirm();" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
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
