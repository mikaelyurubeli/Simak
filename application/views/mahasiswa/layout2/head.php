<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $title ?></title>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

	<!-- Data Table -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"/>	
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css"/>	
	
	<link rel="icon" href="<?php echo base_url();?>/assets/img/logo-unj.png" type="image/gif">

	<script src="<?php echo base_url();?>assets/bootstrap/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/bootstrap.min.js"></script>

	<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

	<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>

	<script>
	function doconfirm() {
	    job = confirm("Apakah anda yakin akan menghapus ini?");
	    if (job != true) {
	        return false;
	    }
	}

	function doconfirm2() {
		job = confirm("Apakah anda yakin data yang anda isi benar?");
		if (job != true) {
			return false;
		}
	}

	</script>

	<!--[if lt IE 9]>
		<script src="{{asset  ('http::/localhost/laravelapp/public/js/html5shiv.min.js')}}"></script>
		<script src="{{asset  ('http::/localhost/laravelapp/public/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>

<div id="wrapper" class="container alls" style="min-width: 1024px; box-shadow: 0 2px 4px 0 rgba(0,0,0,.14); border: .5px solid #ddd;">

<!-- 
	More Info mikaelyuru@gmail.com
 -->