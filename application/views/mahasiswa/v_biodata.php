<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Biodata Mahasiswa</title>
<!--
	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/style.css" rel="stylesheet">
-->

	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<script src="<?php echo base_url();?>assets/bootstrap/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/bootstrap.min.js"></script>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

	<!--[if lt IE 9]>
		<script src="{{asset  ('http::/localhost/laravelapp/public/js/html5shiv.min.js')}}"></script>
		<script src="{{asset  ('http::/localhost/laravelapp/public/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>

<div id="wrapper" class="container alls">
  <div class="container headers">
  <div class="row">
    <div class="col-md-1 col-xs-2 text-center">
    <img src="<?php echo base_url();?>assets/img/logo-unj.png" alt="Logo Unj" width="90px" height="90px" />
    </div>
    <div class="col-md-11 col-xs-10 text-left titles">
      <p>Sistem Informasi Administrasi Laboratorium Kimia (SIMAK)</p>
      <p>Universitas Negeri Jakarta</p>
    </div>
  </div>
  </div>

  <nav class="navbar navbar-default">
   <div class="container-fluid">
     <div class="navbar-header">
       <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
       </button>
       <a class="navbar-brand" href="<?php echo base_url();?>">Simak</a>
     </div>
     <div class="collapse navbar-collapse" id="myNavbar">
       <ul class="nav navbar-nav navbar-right">
         <li><a href="<?php echo base_url();?>c_login/logout">Logout</a></li>
       </ul>
     </div>
   </div>
  </nav>

<div class="container" style="margin: 2%">

  <h3><center>Data Mahasiswa</center></h3>
	<div class="row">
  <div class="col-md-6 col-md-offset-2" style="margin-top: 2%">
    <?php echo validation_errors(); ?>
    <!--<?php echo form_open_multipart('mahasiswa/c_mhs/add_biodata', array('runat' => 'server'));?>-->
		<form action="<?php echo base_url();?>mahasiswa/c_mhs/add_biodata" method="post" enctype="multipart/form-data" runat="server">
      <table class="table table-borderless">
        <tr><td><input type="hidden" name="id_user" value="<?php echo $id_user ?>" class="form-control"></td></tr>
        <tr>
          <td>Nama</td><td>:</td>
          <td><input type="text" class="form-control" id="nama" name="nama" required></td>
        </tr>
        <tr>
          <td>Nomor Registrasi</td><td>:</td>
          <td><input type="text" class="form-control" id="noreg" name="noreg" required></td>
        </tr>
        <tr>
          <td>Program Studi</td><td>:</td>
          <td><input type="text" class="form-control" id="program_studi" name="program_studi" required></td>
        </tr>
        <tr>
          <td>Email</td><td>:</td>
          <td><input type="text" class="form-control" id="email" name="email" required></td>
        </tr>
        <tr>
          <td>Alamat</td><td>:</td>
          <td><input type="text" class="form-control" id="alamat" name="alamat" required></td>
        </tr>
        <tr>
          <td>No.HP</td><td>:</td>
          <td><input type="text" class="form-control" id="no_hp" name="no_hp" required></td>
        </tr>
        <tr>
          <td>Tahun Angkatan</td><td>:</td>
          <td>
            <select class="form-control" id="tahun_angkatan" name="tahun_angkatan" required>
              <option value=''>--- Tahun Angkatan ---</option>
              <?php foreach($tahun_angkatan->result() as $row)  { ?>
                <?php echo "<option value='".$row->id_tahun."'>".$row->tahun_angkatan."</option>";
               } ?>
           </select>
          </td>
        </tr>
        <tr>
          <td>Foto</td><td>:</td>
          <td>
						<input type='file' id="url_foto" name="url_foto" />
		        <img id="blah" src="#" alt="" width="120px" height="160px"/><p style="font-size: 12px; color: grey">ukuran maksimal gambar 1 mb</p>
					</td>
        </tr>
        <tr>
          <td></td><td></td>
					<td><input type="submit" value="Simpan" class="btn btn-primary"></td>
				</tr>
      </table>
  	</form>
  </div>
	</div>
</div>

<div class="container-fluid footer">
	<hr />
	<p>SIMAK (Sistem Informasi Administrasi Laboratorium Kimia)
	<p>&copy; 2017 Mikael-Y. All Rights Reserved</p>
</div>
</div>
</body>
</html>
<script>
function readURL(input) {
			if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
							$('#blah').attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
			}
	}

	$("#url_foto").change(function(){
			readURL(this);
	});
</script>

<script>
(function ($) {
    $(document).ready(function () {
        $('ul.dropdown-menu [data-toggle=dropdown]').on('click', function (event) {
            event.preventDefault();
            event.stopPropagation();
            $(this).parent().siblings().removeClass('open');
            $(this).parent().toggleClass('open');
        });
    });
})(jQuery);
</script>
