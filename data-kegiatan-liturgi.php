<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 

    <title>Gereja Katholik Santo Paulus</title>

    <!-- My Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="assets/style.css">

  </head> 
  <body>
    <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">

        <a class="navbar-brand" href="#"> St. Paulus</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="index">Beranda <span class="sr-only">(current)</span></a>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Wartagalilea
                  </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="pengumuman.php">Pengumuman</a>
                    <a class="dropdown-item" href="ulang-tahun-umat.php">Ulang Tahun Umat</a>
                    <a class="dropdown-item" href="berita-kedukaan.php">Berita Kedukaan</a>
                    </div>
                    </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Liturgi
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="jadwal-ekaristi.php">Jadwal Ekaristi</a>
                    <a class="dropdown-item" href="petugas-liturgi">Petugas Liturgi</a>
                    <a class="dropdown-item" href="kegiatan-liturgi">Kegiatan Bidang Liturgi</a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pewartaan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="piud">PIUD/PIA/PIR</a>
                    <a class="dropdown-item" href="omk">OMK</a>
                    <a class="dropdown-item" href="lansia">Lansia</a>
                    <a class="dropdown-item" href="katekis">Katekis</a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Persekutuan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Pemberdayaan Wanita</a>
                    <a class="dropdown-item" href="#">Legio Maria</a>
                    <a class="dropdown-item" href="#">SSV</a>
                  </div>
              </li>

              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Pelayanan
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="kesehatan-masyarakat">Layanan Kesehatan Masyarakat</a>
                    <a class="dropdown-item" href="hubungan-masyarakat">Hubungan Masyarakat</a>
                    <a class="dropdown-item" href="pse">PSE</a>
                  </div>
              </li>

              <a class="nav-item nav-link" href="#">Kontak</a>
            </div>
          </div>

      </div>
      </nav>

    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Gereja Katolik <br>
        <span> Kegiatan Bidang Liturgi</span> </h1>
      </div>
    </div>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

                <?php

                include "lib/connection.php";

                $id_kegiatan = $_GET['id_kegiatan'];

                $sql = mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE id_kegiatan='$id_kegiatan' ");
                $row = mysqli_num_rows($sql);

                if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                while($data = mysqli_fetch_array($sql)){
                ?>
                    <br>
                    <img src='assets/img/<?php echo $data['foto']; ?>' width='900' height='500'>
                    </br>

                    <br>
                    <input type="hidden" name="id_kegiatan" value="<?php echo $data['id_kegiatan']; ?>" class="form-control" readonly>
             
                    <input type="text" name="nama_kegiatan" value="<?php echo $data['nama_kegiatan']; ?>" class="form-control" readonly/>
               
                    <input type="date" name="tgl_kegiatan" value="<?php echo $data['tgl_kegiatan']; ?>" class="form-control" readonly/>
    
                    <textarea class="form-control" name="keterangan" rows="5" readonly><?php echo $data['keterangan']; ?></textarea>
                
                <?php

                    }
                } 
                else{
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }

                ?>

                <br>
                <div class="form-group col-xs-12">
                    <a class= "btn btn-info" href="kegiatan-liturgi.php">Kembali</a>
                </div>


        </div>
    </div>

</div>

