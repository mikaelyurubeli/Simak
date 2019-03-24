<div class="container">
	<h3>Penelitian</h3>
    <?php foreach($data as $u){ ?>
	<div class="col-md-7" style="margin-top: 2%">
        <form action="<?php echo base_url();?>admin/C_penelitian/do_update_perizinan_lembur" method="post">
            <table class="table table-borderless">
                <tr>
                    <td style="width: 200px">Judul Penelitian</td>
                    <td>
                        <input type="hidden" name="id_penelitian" value="<?php echo $u->id_penelitian ?>" class="form-control" />
                        <input type="text" name="judul_penelitian" value="<?php echo $u->judul_penelitian ?>" class="form-control" required />
                    </td>
                </tr>
                <tr>
                    <td>Pembimbing 1</td>
                    <td>
                        <select class="form-control" id="pembimbing_1" name="pembimbing_1" required style="margin-bottom: 14px;">
                        <option value='<?php echo $u->pembimbing_1 ?>'><?php echo $u->pembimbing_1 ?></option>
                        <?php foreach($dosen->result() as $row)  { ?>
                            <?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
                        } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pembimbing 2</td>
                    <td>
                        <select class="form-control" id="pembimbing_2" name="pembimbing_2" required style="margin-bottom: 14px;">
                        <option value='<?php echo $u->pembimbing_2 ?>'><?php echo $u->pembimbing_2 ?></option>
                        <?php foreach($dosen->result() as $row)  { ?>
                            <?php echo "<option value='".$row->nama."'>".$row->nama."</option>";
                        } ?>
                        </select>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td class="text-right">					
                        <input action="action" onclick="window.history.go(-1); return false;" type="button" value="Back" class="btn btn-default btn-sm" style="width: 120px; height: 30px" />
                        <input type="submit" value="Simpan" class="btn btn-success" onClick="return doconfirm2();" style="width: 120px; height: 30px" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <?php } ?>
</div>
