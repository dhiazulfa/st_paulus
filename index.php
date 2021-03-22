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
                    <a class="dropdown-item" href="petugas-liturgi.php">Petugas Liturgi</a>
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
              
              <li>
              <a class="nav-item nav-link" href="#">Kontak</a>
              </li>

            
            </div>
          </div>

      </div>
      </nav>

    <!-- End Navbar -->

    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-4">Gereja Katolik <br>
        <span> Santo Paulus XIV Banyubiru</span> </h1>
      </div>
    </div>

    <!-- end jumbotron -->



    <!-- Container semua -->
    <div class="container">
    
      <!-- info panel -->
      <div class="row justify-content-center">
        <div class="col-10 info-panel">
          <div class="row">
            <div class="col-lg">
              <img src="assets/img/employee.png" alt="Employee" class="float-left">
              <h4>Tentang Kami</h4>
              <a href="tentang-kami.php">Lihat Selengkapnya</a>
            </div>

            <div class="col-lg">
              <img src="assets/img/hires.png" alt="High Res" class="float-left">
              <h4>Galeri</h4>
              <a href="galeri.php"> Lihat Selengkapnya</a>
            </div>

            <div class="col-lg">
              <img src="assets/img/security.png" alt="High Res" class="float-left">
              <h4>Artikel</h4>
              <a href="artikel.php"> Lihat Selengkapnya</a>
            </div>

          </div>
        </div>
      </div>
      <br><br>
      <!-- akhir info panel -->

<!-- card -->
      <h2 class="text-center header">Warta Galilea</h2><br>
      
      <div class="card">
        <div class="card-header">
          Pengumuman
        </div>
        <div class="card-body">

          <?php
          require ("lib/library.php");

          $Lib  = new Pengumuman();
          $show = $Lib->showAttention();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->isi_pengumuman; ?>
                        </h3>
                        <footer class="blockquote-footer"><?php echo $data->tgl_pengumuman; ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <br>
            <a href="pengumuman" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      


      <br>

      <div class="card">
        <div class="card-header">
          Ulang Tahun Umat
        </div>
        <div class="card-body">
        <?php
        $Lib  = new Ultah();
          $show = $Lib->showUltah();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->keterangan; ?> <?php echo $data->nama_umat;?>
                        </h3>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_lahir;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="ulang-tahun-umat" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-header">
          Berita Kedukaan 
        </div>
        <div class="card-body">

          <?php

          $Lib  = new Kedukaan();
          $show = $Lib->showKedukaan();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->nama_duka; ?> 
                        </h3>
                        <p>
                        <?php echo $data->berita_kedukaan;?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_kedukaan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>

                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pemakaman;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="berita-kedukaan" class="ml-auto">Lihat selengkapnya</a>
      </div>
      </div>

          <br>  

<h2 class="text-center header">Liturgi</h2><br>
      
      <div class="card">
        <div class="card-header">
          Petugas Liturgi
        </div>
        <div class="card-body">

          <?php
          $Lib  = new PetugasLiturgi();
          $show = $Lib->showPetugas();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->nama_petugas; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->alamat; ?>
                        </p>
                        <p>
                          <?php echo $data->no_telefon; ?>
                        </p>
                        <footer class="blockquote-footer"> 
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
          
            <br>
            <a href="petugas-liturgi" class="ml-auto">Lihat selengkapnya</a>
        </div>
      
      </div>

              <br>

      <div class="card">
        <div class="card-header">
          Jadwal Ekaristi
        </div>
        <div class="card-body">

          <?php


      $Lib  = new JadwalEkaristi();
          $show = $Lib->showJadwal();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->keterangan; ?>  <?php echo $data->tempat_ibadah;?>
                        </h3>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_ibadah;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="jadwal-ekaristi" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
            
            <br>

      <div class="card">
        <div class="card-header">
          Kegiatan liturgi
        </div>
        <div class="card-body">

          <?php

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
                          <?php echo $data->nama_kegiatan; ?>  
                          <p>
                          <?php echo $data->keterangan; ?>
                          </p>
                        </h3>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_kegiatan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="kegiatan-liturgi" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      

      <h2 class="text-center header">Pewartaan</h2><br>
      
      <div class="card">
        <div class="card-header">
          PIUD
        </div>
        <div class="card-body">

          <?php
          $Lib  = new Pewartaan();
          $show = $Lib->showPiud();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                  <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pewartaan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pewartaan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>      
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
          
            <br>
            <a href="piud" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>

              <br>

              <div class="card">
        <div class="card-header">
          OMK
        </div>
        <div class="card-body">

          <?php
          

          $Lib  = new Pewartaan();
          $show = $Lib->showOmk();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pewartaan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pewartaan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="omk" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header">
          Katekis
        </div>
        <div class="card-body">

          <?php
         

          $Lib  = new Pewartaan();
          $show = $Lib->showKatekis();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pewartaan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pewartaan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="katekis" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      <br>


      <div class="card">
        <div class="card-header">
          Lansia
        </div>
        <div class="card-body">

          <?php
         

          $Lib  = new Pewartaan();
          $show = $Lib->showLansia();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pewartaan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pewartaan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="lansia" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      

      <h2 class="text-center header">Pelayanan</h2><br>
      
      <div class="card">
        <div class="card-header">
         Hubungan Masyarakat
        </div>
        <div class="card-body">

          <?php
          $Lib  = new Pelayanan();
          $show = $Lib->showHubungan();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                  <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pelayanan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pelayanan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>      
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
          
            <br>
            <a href="hubungan-masyarakat" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>

              <br>

              <div class="card">
        <div class="card-header">
          Kesehatan Masyarakat
        </div>
        <div class="card-body">

          <?php
          

          $Lib  = new Pelayanan();
          $show = $Lib->showKesehatan();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pelayanan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pelayanan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="kesehatan-masyarakat" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>

      <br>

      <div class="card">
        <div class="card-header">
          PSE
        </div>
        <div class="card-body">

          <?php
         

          $Lib  = new Pelayanan();
          $show = $Lib->showPse();

          $numOfCols = 1;
          $rowCount = 0;
          $bootstrapColWidth = 3 / $numOfCols;
          ?>
            <blockquote class="blockquote mb-0">
              <?php
                  while($data = $show->fetch(PDO::FETCH_LAZY)){
              ?>  
                        <h3 class="<?php echo $bootstrapColWidth; ?>">
                          <?php echo $data->judul_berita; ?>  
                        </h3>   
                        <p>
                          <?php echo $data->berita_pelayanan; ?>
                        </p>
                        <footer class="blockquote-footer">
                        <?php 
                        $tanggal= $data->tgl_pelayanan;
                        echo date("d M Y", strtotime($tanggal))
                         ?></footer>
              <?php
              $rowCount++;
            } 
              ?>
            </blockquote>
            <a href="pse" class="ml-auto">Lihat selengkapnya</a>
        </div>
      </div>
      <br>
      </div>

      <!-- end of pelayanan kemasyarakatan -->

      <!-- testimonial 

      <section class="testimonial">
        
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h5>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime!"</h5>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-6 justify-content-center d-flex">
        
          <figure class="figure">
            <img src="assets/img/img1.png" class="figure-img img-fluid rounded-circle" alt="testi 1">
          </figure>

          <figure class="figure">
            <img src="assets/img/img2.png" class="figure-img img-fluid rounded-circle utama" alt="testi 2">
              <figcaption class="figure-caption">
                <h5>Sunny Ye</h5>
                <p>Designer</p>
              </figcaption>
          </figure>

          <figure class="figure">
            <img src="assets/img/img3.png" class="figure-img img-fluid rounded-circle" alt="testi 3">
          </figure>
          
        </div>
        </div>


      </section>

      // akhir testimonial  -->
      
      </div>
    <!-- end container -->


      <!-- footer -->

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

      <!-- akhir footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>