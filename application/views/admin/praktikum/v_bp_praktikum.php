<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <legend><h3>Daftar Buku Panduan Praktikum</h3></legend>
            <?php echo anchor('admin/c_praktikum/add_buku_panduan', 'Tambah Buku Panduan', array('class' => 'btn btn-success btn-sm', 'style' => 'margin-bottom: 20px; float: right')); ?>
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
                        <th>Aksi</th>
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
                        foreach ($data as $row) {
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row->nama_praktikum ?></td>
                        <td>
                            <?php if ($row->url_file != null) { ?><a href="<?php echo base_url();?><?php echo $row->url_file ?>" target="_self">Download Buku Panduan</a><?php } else { ?> Tidak ada file <?php } ?>
                        </td>
                        <td>
                            <a href="<?php echo base_url();?>admin/c_praktikum/edit_bp/<?php print($row->id);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                                <span class="glyphicon glyphicon-edit" />
                            </a>
                            <a href="<?php echo base_url();?>admin/c_praktikum/delete_bp/<?php print($row->id);?>" title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus buku panduan praktikum <?php print($row->nama_praktikum); ?> dari daftar buku panduan?');" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom">
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