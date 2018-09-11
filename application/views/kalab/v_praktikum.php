<div class="container">
  <h3>Daftar Jadwal Praktikum</h3>
  <br/>

  <?php
    if(empty($hasil)){
      echo "Jadwal belum dibuat!";
    } else {
      ?>
      <table class="table table-stripped">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Hari/Jam</th>
          <th>Praktikum</th>
          <th>Dosen</th>
          <th>Semester</th>
        <tr>

        <?php
          $no = 1;
          foreach ($hasil as $u) {
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->kode_praktikum ?></td>
          <td class="col-md-2"><?php echo $u->hari," ",$u->jam ?></td>
          <td><?php echo $u->nama_praktikum ?></td>
          <td><?php echo $u->dosen ?></td>
          <td><?php echo $u->semester ?></td>
        </tr>
        <?php } ?>
    </table>
    <?php } ?>
</div>
