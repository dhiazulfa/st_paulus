<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Gereja St. Paulus</title>

    <!-- Bootstrap Core CSS -->
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../../assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../../assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../../assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../../assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
</head>
<body>

<?php 
session_start();
   //cek apakah yang mengakses halaman ini sudah login
  if($_SESSION["username"]==""){
    header("location:../../../login.php?pesan=not_login");
  }
?>

<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Admin</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="../../../index" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="../../../lib/logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                <li>
                <a href="../../index"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>

            <li>
                <a href="#"><i class="fa fa-comments fa-fw"></i> Warta Galilea<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="data-pengumuman" class="active fa fa-list"> Pengumuman</a>
                    </li>
                    <li>
                        <a href="#" class="fa fa-birthday-cake"> Ulang Tahun Umat</a>
                    </li>
                    <li>
                        <a href="../berita-kedukaan/data-kedukaan" class="fa fa-list-alt"> Berita Kedukaan</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-book fa-fw"></i> Liturgi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../../liturgi/jadwal-ekaristi/data-jadwal-ekaristi.php"class="fa fa-bookmark-o"> Jadwal Ekaristi</a>
                    </li>
                    <li>
                        <a href="../../liturgi/petugas-liturgi/data-petugas-liturgi.php" class="fa fa-briefcase"> Petugas Liturgi</a>
                    </li>
                    <li>
                        <a href="data-krgiatan-liturgi.php"class="fa fa-database"> Kegiatan Bidang Liturgi</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-handshake-o fa-fw"></i> Persekutuan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../../persekutuan/legio-maria.php" class="fa fa-balance-scale"> Legio Maria</a>
                    </li>
                    <li>
                        <a href="../../persekutuan/pemberdayaan-wanita.php" class="fa fa-female"> Pemberdayaan Wanita</a>
                    </li>
                    <li>
                        <a href="../../persekutuan/ssv.php" class="fa fa-snapchat-ghost"> SSV</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bed fa-fw"></i> Pewartaan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="../../pewartaan/data-pewartaan-katekis.php" class="fa fa-gavel"> Katekis</a>
                    </li>
                    <li>
                        <a href="../../pewartaan/data-pewartaan-lansia.php" class="fa fa-heart"> Lansia</a>
                    </li>
                    <li>
                        <a href="../../pewartaan/dta-pewartaan-omk.php"class="fa fa-anchor"> OMK</a>
                    </li>
                    <li>
                        <a href="../../pewartaan/data-pewartaan-piud.php" class="fa fa-star"> PIUD</a>
                    </li>
                </ul>
            </li>

            <li>
                        <a href="#"><i class="fa fa-bed fa-fw"></i> Pelayanan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../../pelayanan-masyarakat/data-pelayanan-kesehatan.php" class="fa fa-gavel"> Kesehatan Masyarakat</a>
                            </li>
                            <li>
                                <a href="../../pelayanan-masyarakat/data-pelayanan-hubungan.php" class="fa fa-heart"> Hubungan Masyarakat</a>
                            </li>
                            <li>
                                <a href="../../pelayanan-masyarakat/data-pse.php"class="fa fa-anchor">PSE</a>
                            </li>


                
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Kegiatan Liturgi</h1>
                </div>
            </div>
            
            <form class="row" action="update-kegiatan-liturgi.php" method="POST" enctype="multipart/form-data">
                <?php

                include "../../../lib/connection.php";

                $id_kegiatan = $_GET['id_kegiatan'];

                $sql = mysqli_query($conn, "SELECT * FROM tb_kegiatan WHERE id_kegiatan='$id_kegiatan' ");
                $row = mysqli_num_rows($sql);

                if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                while($data = mysqli_fetch_array($sql)){
                ?>

                <div class="form-group col-xs-12">
                <label>ID Kegiatan</label>
                    <input type="text" name="id_kegiatan" value="<?php echo $data['id_kegiatan']; ?>" class="form-control" readonly>
                </div>

                <div class="form-group col-xs-8">
                <label>Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" value="<?php echo $data['nama_kegiatan']; ?>" class="form-control" required/>
                </div>

                <div class="form-group col-xs-2">
                <label>Tanggal Kegiatan</label>
                    <input type="date" name="tgl_kegiatan" value="<?php echo $data['tgl_kegiatan']; ?>" class="form-control" required/>
                </div>

                <div class="form-group col-xs-12">
                <label>Keterangan</label>
                <textarea class="form-control" name="keterangan" value="<?php echo $data['keterangan']; ?>" rows="5" required></textarea>
                </div>

                <div class="form-group col-xs-12">
                    <label>Foto Kegiatan</label>
                    <input class="form-control" name="foto" type="file" required></input>
                </div>

                <?php

                    }
                } 
                else{
                echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
                }

                ?>
    
                <div class="form-group col-xs-12">
                    <input type="submit" name="updateKegiatan" value="Update" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-danger">
                    <a class= "btn btn-info" href="data-kegiatan-liturgi.php">Kembali</a>
                </div>

            </form>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../../assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../../assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../../assets/js/startmin.js"></script>

</body>
</html>