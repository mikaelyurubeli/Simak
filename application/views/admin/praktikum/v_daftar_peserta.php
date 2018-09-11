<div class="container">
  <div class="row">
    <div class="col-md-12" style="margin-bottom: 1%">
      <center><h3><?php echo $title?></h3></center>
    </div>
  </div>

  <div class="row">  
    <div class="col-md-12 col-xs-12" style="margin-bottom: 1%;">
        <table id="table-export" class="table table-striped table-datatable">
          <thead>
            <tr>
              <th style="width: 10px">No</th>
              <th>Nama</th>
              <th>Noreg</th>
              <th>Program Studi</th>
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
            foreach ($list as $u) {
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->noreg ?></td>
            <td><?php echo $u->program_studi ?></a></td>
          </tr>
          <?php } ?>
          </tbody>
      </table>
    </div>
  </div>
</div>

<script >
$(document).ready(function() {
    $('#table-export').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excel', 'pdf'
        ]
    } );
} );
</script>