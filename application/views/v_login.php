<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIMAK</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
	<link rel="icon" href="<?php echo base_url();?>assets/img/logo-unj.png" type="image/gif">
  <!--[if lt IE 9]>
    <script src="{{asset  ('http::/localhost/laravelapp/public/js/html5shiv.min.js')}}"></script>
    <script src="{{asset  ('http::/localhost/laravelapp/public/js/respond.min.js')}}"></script>
  <![endif]-->
</head>

<body style="background-color: #fff">
<div class="container-fluid logins">
  <div class="row">
    <div class="col-md-12 login-header">
      <div class="col-md-12 col-xs-2 text-center">
      <img src="<?php echo base_url();?>assets/img/logo-unj.png" alt="Logo Unj" width="90px" height="90px" />
      </div>
      <div class="col-md-12 col-xs-10 text-center titles">
        <p>Sistem Informasi Administrasi Laboratorium Kimia (SIMAK)</p>
        <p>Universitas Negeri Jakarta</p>
      </div>
    </div>

    <div class="col-md-12 col-xs-12 login-body">
    <form action="c_login/do_login" method="post">
      <div class="form-group">
      <div class="row colbox">
        <div class="col-md-1 col-sm-2 col-md-offset-4">
          <label for="username" class="control-label">Username</label>
        </div>
        <div class="col-md-3 col-sm-4">
          <input class="form-control" id="username" name="username" placeholder="Noreg/Username" type="text" value="<?php echo set_value('username'); ?>" required/>
        </div>
      </div>
      </div>

      <div class="form-group">
      <div class="row colbox">
        <div class="col-md-1 col-sm-2 col-md-offset-4">
          <label for="password" class="control-label">Password</label>
        </div>
        <div class="col-md-3 col-sm-4">
          <input class="form-control" id="password" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" required/>
        </div>
      </div>
      </div>

      <div class="form-group">
        <div class="row colbox">
          <div class="col-md-1 col-xs-3 col-md-offset-7">
            <button type="submit" class="btn btn-default form-control">Login</button>
          </div>
        </div>
      </div>
    </form>

    </div>
  </div>
</div>


<script src="<?php echo base_url();?>assets/bootstrap/jquery.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>
