<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Alat Kimia</h3></legend>
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
          <th>SOP/IK</th>
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
        foreach($alat as $u){
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->nama_alat ?></td>
          <td><?php echo $u->spesifikasi ?></td>
          <td>
            <?php if ($u->sop != null) { ?><a href="<?php echo base_url();?><?php echo $u->sop ?>" target="_self">Unduh file SOP/IK</a><?php } else { ?> Tidak ada file <?php } ?>
          </td>
        </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
