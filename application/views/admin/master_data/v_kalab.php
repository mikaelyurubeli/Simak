<div class="container">
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <legend><h3>Kepala Laboratorium</h3></legend>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-xs-12">
            <table class="table table-striped table-datatable">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>NIP</th>
                        <th>Nama Dosen</th>
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
                        <td class="col-md-3"><?php echo $row->nip ?></td>
                        <td class="col-md-8"><?php echo $row->nama ?></td>
                        <td>
                            <a href="<?php echo base_url();?>admin/c_master_data/edit_kalab/<?php print($row->id);?>" title="Edit Data" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom">
                                <span class="glyphicon glyphicon-edit" />
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>