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
      <a class="navbar-brand" href="<?php echo base_url();?>mahasiswa/c_mhs">Simak</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Praktikum<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>mahasiswa/c_praktikum">Jadwal Praktikum</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_praktikum/daftar_praktikum">Daftar Praktikum</a></li>
          </ul>
        </li>
        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Praktikum<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Kimia Analisis Instrumen</a></li>
           	<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kimia Dasar</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Kimia Dasar I</a></li>
                    <li><a href="#">Kimia Dasar II</a></li>
                </ul>
            </li>
            <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Kimia Dasar Umum</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Kimia Dasar Biologi</a></li>
                    <li><a href="#">Kimia Dasar Fisika</a></li>
                </ul>
            </li>
            <li><a href="#">Kimia Kuanlitatif & Kuantitatif</a></li>
            <li><a href="#">Kimia Organik Identifikasi</a></li>
            <li><a href="#">Kimia Organik Isolasi</a></li>
            <li><a href="#">Kimia Pemisahan</a></li>
            <li><a href="#">Kimia Unsur</a></li>
            <li><a href="#">Kinetika Kimia</a></li>
            <li><a href="#">Metabolisme Biomolekul</a></li>
            <li><a href="#">Struktur & Fungsi Biomolekul</a></li>
            <li><a href="#">Termodinamika</a></li>
            <li><a href="#">Kimia Analisis Lingkungan</a></li>
            <li><a href="#">Sintesis Kimia Anorganik</a></li>
          </ul>-->
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Penelitian<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian">Penelitian (Umum)</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian/penelitian_aas">Atomic Absorbtion Spectroscopy</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian/penelitian_saa">Surface Area Analyzer</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian/penelitian_spektro">Spektrofotometer UV-V15</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian/penelitian_ocean">Ocean Optics</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_penelitian/penelitian_poten">Potentiostat</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Peminjaman<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>mahasiswa/c_peminjaman/peminjaman_alat">Peminjaman Alat Kimia</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_peminjaman/peminjaman_bahan">Peminjaman Bahan Kimia</a></li>
            <!--<li><a href="#">Peminjaman Laboratorium</a></li>-->
          </ul>
        </li>
        <!--<li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Asisten<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>mahasiswa/c_asisten">Daftar Asisten</a></li>
            <li><a href="<?php echo base_url();?>mahasiswa/c_asisten/pendaftaran_asisten">Lihat Pendaftaran</a></li>
          </ul>
        </li>-->
        <li><a href="<?php echo base_url();?>mahasiswa/c_asisten">Daftar Asisten</a></li>
        <li><a href="<?php echo base_url();?>mahasiswa/c_mhs/user">User</a></li>
        <li><a href="<?php echo base_url();?>c_login/logout">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
