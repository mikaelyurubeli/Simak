<div class="container-fluid" style="margin-right: 20px; margin-left: 20px">
  <div class="row" style="margin-bottom: 20px">
    <div class="col-md-12 col-xs-12">
      <legend><h3>Pendaftaran Asisten</h3></legend>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-stripped table-datatable">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Mahasiswa</th>
            <th>Pilihan 1</th>
            <th>Pilihan 2</th>
            <th>Pilihan 3</th>
            <th>Nilai Kimia Organik</th>
            <th>Jam Kosong</th>
            <th>Semester</th>
          </tr>
        </thead>
        <tfoot>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>
        </tfoot>
        <tbody>
        <?php
          $no = 1;
          foreach ($hasil as $u) {
        ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->pilihan_praktikum1 ?></td>
            <td><?php echo $u->pilihan_praktikum2 ?></td>
            <td><?php echo $u->pilihan_praktikum3 ?></td>
            <td><?php echo $u->nilai_kimia_organik ?></td>
            <td><?php echo $u->jam_kosong ?></td>
            <td class="text-center"><?php echo $u->semester ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
