<div class="container-fluid headers">
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

      <li><a href="<?php echo base_url();?>kalab/c_praktikum/jadwal_praktikum">Praktikum</a></li>
      <!--<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">Praktikum<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>kalab/c_praktikum/jadwal_praktikum">Jadwal Praktikum</a></li>
          <li><a href="<?php echo base_url()?>kalab/c_praktikum/riwayat_praktikum">Riwayat Praktikum</a></li>
        </ul>
      </li>-->
      <li><a href="<?php echo base_url();?>kalab/c_penelitian">Penelitian</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Peminjaman<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url();?>kalab/c_peminjaman/peminjaman_alat">Peminjaman Alat Kimia</a></li>
          <li><a href="<?php echo base_url();?>kalab/c_peminjaman/peminjaman_bahan">Pemakaian Bahan Kimia</a></li>
        </ul>
      </li>

      <li><a href="<?php echo base_url();?>kalab/c_asisten">Asisten</a></li>

      <li><a href="<?php echo base_url();?>c_login/logout">Logout</a></li>
    </ul>
  </div>
</div>
</nav>
