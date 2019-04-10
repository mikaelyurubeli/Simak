<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <legend><h3>Daftar Buku Panduan Praktikum</h3></legend>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table table-striped table-datatable">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Nama Praktikum</th>
                        <th>Buku Panduan</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        $no = 1;
                        foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nama_praktikum ?></td>
                        <td>
                            <?php if ($row->url_file != null) { ?><a href="<?php echo base_url();?><?php echo $row->url_file ?>" target="_self">Download Buku Panduan</a><?php } else { ?> Tidak ada file <?php } ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>