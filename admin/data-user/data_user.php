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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>

<body>

<?php 
	session_start();
	if($_SESSION['username']==""){
		header("location:../../login.php?pesan=gagal");
	}
 
?>

<div class="container">
<div class="row">
<div class="col-md-12">

<table class="table table-striped table-md table-sm table-bordered" cellpadding="8">

<?php
include "../../connection.php";

$id_user = $_GET['id_user'];

$sql = mysqli_query($conn, "SELECT * FROM user WHERE id_user='$id_user' "); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
  while($data = mysqli_fetch_array($sql)){
    ?> 
<tr>
    <input type="hidden" name="id_user" value="<?php echo $data['id_user']; ?>">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
        <h3> DATA USER </h3>
    </div>
</tr>

<tr>
    <td>ID Pegawai</td>
    <td> <?php echo $data['id_user']; ?> </td>
</tr>

<tr>
    <td>Nama</td>
    <td> <?php echo $data['nama_user']; ?> </td>
</tr>

<tr>
    <td>No. Telepon</td>
    <td> <?php echo $data['no_tlfn']; ?> </td>
</tr>

<tr>
    <td>Gambar</td>
    <td><img src='foto/<?php echo $data['foto']; ?>' width='100' height='100'></td>
</tr>

<?php

  }

} else{ // Jika data tidak ada

  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";

}

?>
</table>

<a type="button" class="btn btn-danger" href="../index.php">Kembali</a>
<br><br>
          </div>
        </div>
      </div>

</body>
</html>