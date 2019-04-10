<div class="container">
    <h3>Edit Buku Panduan Praktikum</h3>

    <?php foreach($data as $u){ ?>
    <div class="col-md-5" style="margin-top: 2%">
        <?php echo validation_errors(); ?>
        <form action="<?php echo base_url();?>admin/c_praktikum/update_bp" method="post" enctype="multipart/form-data" runat="server">
            <table class="table table-borderless">
                <tr>
                    <td width="140px">Nama Praktikum</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $u->id ?>" class="form-control">
                        <select class="form-control" id="nama_praktikum" name="nama_praktikum" required>
                            <?php foreach($praktikum->result() as $row) { ?>
                            <?php if($row->nama_praktikum == $u->nama_praktikum) {
                                    echo "<option selected value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";									
                                } else {
                                    echo "<option value='".$row->nama_praktikum."'>".$row->nama_praktikum."</option>";
                                }
                            } ?>
                        </select>
                </td>
                </tr>

                <tr>
                    <td>Buku Panduan</td>
                    <td>
                        <input type="file" accept=".pdf" id="url_file" name="url_file">
                        <p style="font-size: 12px; color: grey">*pilih file hanya jika akan merubah file SOP/IK, file tetap sama jika tidak memilih file baru</p>
                    </td>
                </tr>

                <tr>
                <td></td>
                <td class="text-right">					
                    <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px"/>
                    <input type="submit" value="Simpan" class="btn btn-success" style="width: 120px; height: 30px"/>
                </td>
                </tr>
            </table>
        </form>
    </div>
    <?php } ?>
</div>