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

    <!-- end jumbotron -->
    <div class="container">

    <div class="card">
        <div class="card-header">
          Kegiatan liturgi
        </div>
        <div class="card-body">

          <?php
          require ("lib/library.php");

          $Lib  = new KegiatanLiturgi();
          $show = $Lib->showKegiatan();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->nama_kegiatan; ?> </h3> 
                          <p>
                           <?php echo $data->keterangan; ?>
                           </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_kegiatan;
                        echo date("d M Y", strtotime($tanggal))
                         ?>
                         </footer>
                         <a href="data-kegiatan-liturgi.php?id_kegiatan=<?php echo $data->id_kegiatan; ?>">Selengkapnya</a>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <br>
        </div>
      </div>

      </div>
      


      <!-- akhir footer -->

      
      <div class="row atas">
        <div class="col-lg text-center">
          <h4>Jadwal Ekaristi</h4>
          <br>
          <p>Minggu Pukul 00:00 - 12:00 WIB</p>
          <p>Minggu Pukul 00:00 - 12:00 WIB</p>
          <p>Minggu Pukul 00:00 - 12:00 WIB</p>
          <p>Minggu Pukul 00:00 - 12:00 WIB</p>
          <p>Minggu Pukul 00:00 - 12:00 WIB</p>
        </div>

        <div class="col-lg text-center">
          <h4>Hubungi Kami</h4>
          <br>
          <p>Alamat: <br> Jl. Diponegoro No.34, Salatiga, Kec. Sidorejo,<br> Kota Salatiga, Jawa Tengah 50711</p>
          <p>Email: <br> santopaulusXIV@gmail.com</p>
          <p>Nomor Telefon: <br> 0874-1738-183</p>
          </div>

        <div class="col-lg text-center">
          <h4>Tentang Kami</h4><br>
          <a class="anchor" href="">Sejarah</a><br>
          <a class="anchor" href="">Profil St. Pelindung</a><br>
          <a class="anchor" href="">Visi/Misi</a><br>
          <a class="anchor" href="">Organisasi</a><br>
          <a class="anchor" href="">Lingkungan</a><br>
          <a class="anchor" href="">RKK</a><br>
        </div>

      </div>

      <div class="row footer">
      <div class="col text-center">
          <p>2021&copy; All Rights Reserved by CARAKAN</p>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>