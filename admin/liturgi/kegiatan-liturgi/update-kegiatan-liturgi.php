<?php
// Load file koneksi.php
include "../../../lib/connection.php";

// Ambil Data yang Dikirim dari Form
$id_kegiatan        = $_POST['id_kegiatan'];
$nama_kegiatan      = $_POST['nama_kegiatan'];
$tgl_kegiatan       = $_POST['tgl_kegiatan'];
$keterangan         = $_POST['keterangan'];

$foto               = $_FILES['foto']['name'];
$tipe               = $_FILES['foto']['type'];
$tmp_file           = $_FILES['foto']['tmp_name'];

// Set path folder tempat menyimpan gambarnya
$path = "../../../assets/img/".$foto;

if($tipe == "image/jpg" || $tipe == "image/jpeg" || $tipe == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
	// Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :	
      // Proses simpan ke Database
      $query = "UPDATE tb_kegiatan SET nama_kegiatan='$nama_kegiatan', tgl_kegiatan='$tgl_kegiatan', keterangan='$keterangan', 
      foto='".$foto."', tipe='".$tipe."' WHERE id_kegiatan='$id_kegiatan' ";
      $sql = mysqli_query($conn, $query); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        echo '<script language="javascript">alert("Berhasil mengubah kegiatan!"); document.location="data-kegiatan-liturgi"; </script>';
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='data-kegiatan-liturgi'>Kembali</a>";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
      echo "<br><a href='data-kegiatan-liturgi'>Kembali</a>";
    }
}else{
	// Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
	echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
	echo "<br><a href='data-kegiatan-liturgi'>Kembali</a>";
  }
?>