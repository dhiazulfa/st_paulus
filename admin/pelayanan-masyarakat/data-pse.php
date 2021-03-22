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
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../assets/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../assets/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../assets/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php 
session_start();
   //cek apakah yang mengakses halaman ini sudah login
  if($_SESSION['username']==""){
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
            <li><a href="../../index" target="_blank"><i class="fa fa-home fa-fw"></i> Website</a></li>
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
                        <a href="../index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-comments fa-fw"></i> Warta Galilea<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../warta-galilea/pengumuman/data-pengumuman" class="active fa fa-list"> Pengumuman</a>
                            </li>
                            <li>
                                <a href="../warta-galilea/ulang-tahun-umat/data-ulang-tahun-umat" class="fa fa-birthday-cake"> Ulang Tahun Umat</a>
                            </li>
                            <li>
                                <a href="../warta-galilea/berita-kedukaan/data-kedukaan" class="fa fa-list-alt"> Berita Kedukaan</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-book fa-fw"></i> Liturgi<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../liturgi/jadwal-ekaristi/data-jadwal-ekaristi.php"class="fa fa-bookmark-o"> Jadwal Ekaristi</a>
                            </li>
                            <li>
                                <a href="../liturgi/petugas-liturgi/data-petugas-liturgi.php" class="fa fa-briefcase"> Petugas Liturgi</a>
                            </li>
                            <li>
                                <a href="../liturgi/kegiatan-liturgi/data-kegiatan-liturgi.php"class="fa fa-database"> Kegiatan Bidang Liturgi</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-handshake-o fa-fw"></i> Persekutuan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="../persekutuan/legio-maria.php" class="fa fa-balance-scale"> Legio Maria</a>
                            </li>
                            <li>
                                <a href="../persekutuan/pemberdayaan-wanita.php" class="fa fa-female"> Pemberdayaan Wanita</a>
                            </li>
                            <li>
                                <a href="../persekutuan/ssv.php" class="fa fa-snapchat-ghost"> SSV</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bed fa-fw"></i> Pewartaan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="data-pewartaan-katekis.php" class="fa fa-gavel"> Katekis</a>
                            </li>
                            <li>
                                <a href="data-pewartaan-lansia.php" class="fa fa-heart"> Lansia</a>
                            </li>
                            <li>
                                <a href="data-pewartaan-omk.php"class="fa fa-anchor"> OMK</a>
                            </li>
                            <li>
                                <a href="data-pewartaan-piud.php" class="fa fa-star"> PIUD</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bed fa-fw"></i> Pelayanan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="data-pelayanan-kesehatan.php" class="fa fa-gavel"> Kesehatan Masyarakat</a>
                            </li>
                            <li>
                                <a href="data-pelayanan-hubungan.php" class="fa fa-heart"> Hubungan Masyarakat</a>
                            </li>
                            <li>
                                <a href="data-pse.php"class="fa fa-anchor">PSE</a>
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
                    <h1 class="page-header"> PSE</h1>
                </div>
            </div>

            <a type="button" class="btn btn-success fa fa-list" href="add-pelayanan-masyarakat"> Tambah</a>
          <br><br>

          <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Berita</th>
                <th scope="col">Kategori Pelayanan</th>
                <th scope="col">Berita Pelayanan</th>
                <th scope="col">Tanggal Pelayanan</th>
                <th scope="col">Pilihan</th>
                </tr>
            </thead>

            <tbody>
            <?php
                require("../lib/library.php");

                $no   = 0;
                $Lib  = new Pelayanan();
                $show = $Lib->showPSE();
                while($data = $show->fetch(PDO::FETCH_LAZY)){
                    $no++;
                    echo "
                    <tr>
                        <th>$no </th>
                        <td>$data->judul_berita</td>
                        <td>$data->kategori_pelayanan</td>
                        <td>$data->berita_pelayanan</td>
                        <td>$data->tgl_pelayanan</td>
                        <td><a class='btn btn-info fa fa-pencil-square-o' href='edit-pelayanan-masyarkat.php?id_pelayanan=$data->id_pelayanan'> Edit </a> <p></p>
                        <a class='btn btn-danger fa fa-trash' href='data-pelayanan-masyarakat.php?delete=$data->id_pelayanan'> Hapus</a></td>
                    </tr>";
                };
            ?>

            <?php
                if(isset($_GET['delete'])){
                   $del = $Lib->deletePelayanan($_GET['delete']);
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=data-pelayanan-masyarakat">';
                }
            ?>

                </tbody>
            </table>
            </div>

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../assets/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../assets/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../assets/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../assets/js/startmin.js"></script>

</body>
</html>
