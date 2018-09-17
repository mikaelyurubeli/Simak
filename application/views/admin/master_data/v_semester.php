<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Daftar Semester</h3></legend>
      <?php echo anchor('admin/c_master_data/tambah_semester', 'Tambah Semester', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 col-xs-12">
      <table class="table table-striped table-datatable">
        <thead>
        <tr>
          <th style="width: 10px">No</th>
          <th>Semester</th>
        </tr>
        </thead>           
        <tfoot>
          <tr>
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
            <td><?php echo $u->semester ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
