<!DOCTYPE html>
<html>
<head>
   <title>Dashboard</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>

<body>
<div class="container">

<nav class="navbar navbar-default">

<div class="navbar-header">
   <a class="navbar-brand" href="#">Dashboard</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">

<?php
   if ($level == 'Administrator') {
?>

   <li class="active"><a href="#">Admin 1 <span class="sr-only">(current)</span></a></li>
   <li><a href="#">Admin 2</a></li>
   <li><a href="#">Admin 3</a></li>
   <li><a href="#">Admin 4</a></li>
   <li><a href="#">Admin 5</a></li>
 
<?php
   } elseif ($level == 'Mahasiswa') {
?>

   <li class="active"><a href="#">User 1 <span class="sr-only">(current)</span></a></li>
   <li><a href="#">User 2</a></li>
   <li><a href="#">User 3</a></li>
   <li><a href="#">User 4</a></li>
   <li><a href="#">User 5</a></li>

<?php
   } elseif ($level == 'Kepala Lab') {
?>

   <li class="active"><a href="#">kalab 1 <span class="sr-only">(current)</span></a></li>
   <li><a href="#">Kalab 2</a></li>
   <li><a href="#">Kalab 3</a></li>
   <li><a href="#">Kalab 4</a></li>
   <li><a href="#">Kalab 5</a></li>

<?php } ?>

</ul>

<ul class="nav navbar-nav navbar-right">
   <li class="navbar-text">Hello <?php echo $nama;?></li>
</ul>
 
</div><!-- /.navbar-collapse -->
</nav>

<h3>Anda login sebagai <?php echo $level;?></h3>
<p>username : <?php echo $username;?></p>
<p>password : <?php echo $password;?></p>
<p>status : <?php echo $status;?></p>

<a href="logout" class="btn btn-danger">Logout</a>

</div>
</body>
</html>