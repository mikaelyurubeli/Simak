<div class="container">
  <div class="row">
    <div class="col-md-12 col-xs-12">
    <center><h3>Pendaftaran Asisten</h3></center><br/>

    <?php
      if(empty($hasil)){
        echo "Belum ada pendaftar untuk asisten!";
      } else { ?>
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <table class="table table-stripped">
              <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>Pilihan 3</th>
                <th>Nilai Kimia Organik</th>
                <th>Jam Kosong</th>

              <tr>

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

              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
