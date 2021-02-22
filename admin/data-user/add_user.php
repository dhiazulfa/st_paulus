<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin Page
  </title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
</head>

<body>

<?php 
	session_start();
 
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['username']==""){
		header("location:../../login.php?pesan=gagal");
	}
 
?>
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="mt-5 mb-4">
    <h1 class="h2">Tambah Pegawai</h1>
</div>

<form action="proses-tambah.php" enctype="multipart/form-data" method="POST">

<div class="form-group col-sm-6">
    <label>Nama</label>
    <input type="text" name="nama_user" class="form-control" required>
</div>

<div class="form-group col-sm-6">
    <label> No. Telepon </label> 
    <input type="text" name="no_tlfn" class="form-control" onkeypress="return number(event)" required>
</div>


<div class="form-group col-sm-6">
    <label> Upload Foto</label> 
    <input type="file" name="foto" class="form-control" required>
</div>

<div class="form-group col-sm-6">
    <input type="submit" value="Tambah" class="btn btn-success">
    <input type="reset" value="Reset" class="btn btn-danger">
    <a type="button" class="btn btn-info" href="../index.php">Kembali</a>
    <br><br>
</div>

<!-- Ini JS-->
<script>
		function number(evt) {
		  var charCode = (evt.which) ? evt.which : event.keyCode
		   if (charCode > 31 && (charCode < 48 || charCode > 57))
 
		    return false;
		  return true;
		}
</script>

</form>        

</div>
</div>
</div>

</body>
</html>