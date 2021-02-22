<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">

</head>
<body>

<?php 
session_start();
   //cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['username']==""){
    header("location: ../../login.php?pesan=gagal");
  }
?>
        <div class="row">
          <div class="col-md-12">
          <div class="container">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Data Pegawai</h1>
            </div>

          <a type="button" class="btn btn-success" href="data-user/add_user.php"> Tambah User</a>
          <a type="button" class="btn btn-danger" href="../logout.php"> Keluar</a>
          <br><br>

          <table class="table table-striped table-sm table-bordered"  cellpadding="8">
              <tr>
                  <th>Nomor</th>
                  <th>Nama User</th>
                  <th>No. Telepon</th>
                  <th>Selengkapnya</th>
                  <th>Pilihan</th>
              </tr>

                <?php
                include "../connection.php";

                $no    = 1;

                $sql = mysqli_query($conn, "SELECT * FROM user"); // Eksekusi/Jalankan query dari variabel $query
                $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

                if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                  while($data = mysqli_fetch_array($sql)){
                    ?>
                    <tr>
                    <th> <?php echo $no++; ?> </th>
                    <td> <?php echo $data['nama_user']; ?> </td>
                    <td> <?php echo $data['no_tlfn']; ?> </td>
                    <td> <a href="data-user/data_user.php?id_user=<?php echo $data['id_user']; ?>">Selengkapnya</a> </td>
                    <td>
                            <a type="button" class="btn btn-info" href="data-user/edit_user.php?id_user=<?php 
                            echo $data['id_user']; ?>">Edit</a>
                            <p> </p>
                            <a type="button" class="btn btn-danger" href="delete.php?id_user=<?php 
                            echo $data['id_user']; ?>">Hapus</a>
                            
                    </td>
                    
                    </tr>

                <?php

                  }

                } else{ // Jika data tidak ada

                  echo "<tr><td colspan='4'>Data tidak ada</td></tr>";

                }

                ?>
          </table> 

          </div>
          </div>
          </div> 
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 
</body>
</html>