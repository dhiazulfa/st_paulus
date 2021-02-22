<?php
// Load file koneksi.php
include "../../connection.php";

// Ambil Data yang Dikirim dari Form
$nama_user      = $_POST['nama_user'];
$no_tlfn        = $_POST['no_tlfn'];

$foto         = $_FILES['foto']['name'];
$tipe           = $_FILES['foto']['type'];
$tmp_file       = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "foto/".$foto;

if($tipe == "image/jpg" || $tipe == "image/jpeg"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
      // Proses simpan ke Databas e
      $query = "INSERT INTO user (nama_user, no_tlfn, foto, tipe) VALUES ( '$nama_user', '$no_tlfn',
      '".$foto."', '".$tipe."')";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: ../index.php"); // Redirectke halaman data_pegawai.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='../index.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='../index.php'>Kembali Ke Form</a>";
    }
}else{
	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	echo "<br><a href='../index.php'>Kembali Ke Form</a>";
  }
?>