<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php echo $title ?></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" id="bootstrap-css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">-->
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/formwizard.css">

	<link rel="icon" href="<?php echo base_url();?>/assets/img/logo-unj.png" type="image/gif">

	<!--<script src="<?php echo base_url();?>assets/bootstrap/jquery.min.js"></script>
	<script src="<?php echo base_url();?>assets/bootstrap/bootstrap.min.js"></script>-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script>

	// comment
	function doconfirm()
	{
			job=confirm("Apakah anda yakin akan menghapus ini?");
			if(job!=true)
			{
					return false;
			}
	}

	function doconfirm2()
	{
			job=confirm("Apakah anda yakin data yang anda isi benar?");
			if(job!=true)
			{
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

<div id="wrapper" class="container alls" style="min-width: 1024px">
