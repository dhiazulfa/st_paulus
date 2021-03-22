<?php

//Class User

class Library{

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function showUser(){
    $sql    = "SELECT * FROM users";
    $query  = $this->db->query($sql);

    return $query;
  } 

  public function editUser($id_user){
    $sql    = "SELECT * FROM users WHERE id_user = '$id_user'";
    $query  = $this->db->query($sql);

    return $query;
  }

  public function updateUser($id_user, $nama_user, $no_tlfn, $email_user, $username, $password){
    $sql    = "UPDATE users SET nama_user='$nama_user', no_tlfn='$no_tlfn', email_user='$email_user', username='$username',
    password='$password' WHERE id_user = '$id_user' ";
    $query  = $this->db->query($sql);

    if(!$query){
      return $php_errormsg;
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="index.php"; </script>';
    }

  }

  public function deleteUser($id_user){
    $sql    = "DELETE FROM users WHERE id_user = '$id_user' ";
    $query  = $this->db->query($sql);

    return $query;
  }

}


//Jadwal Ekaristi
  class JadwalEkaristi{
  
    public function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
    }
  
    public function showJadwal(){
      $sql    = "SELECT * FROM tb_jadwal_ekaristi ORDER BY tgl_ibadah DESC";
      $query  = $this->db->query($sql);
  
      return $query;
    }
  
    public function addJadwal($tempat_ibadah, $tgl_ibadah, $keterangan){
      $sql    = "INSERT INTO tb_jadwal_ekaristi(tempat_ibadah, tgl_ibadah, keterangan) VALUES ('$tempat_ibadah', '$tgl_ibadah', '$keterangan') ";
      $query  = $this->db->query($sql);
  
      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil menambah jadwal!"); document.location="data-jadwal-ekaristi"; </script>';
      }    
    }

    public function sumJadwal(){
      $sql    = "SELECT COUNT(*) FROM tb_jadwal_ekaristi";
      $query  = $this->db->query($sql);
      return $query;
    }
  
    public function editJadwal($id_jadwal){
      $sql    = "SELECT * FROM tb_jadwal_ekaristi WHERE id_jadwal = '$id_jadwal' ";
      
      $query  = $this->db->query($sql);
      return $query;
    }
  
    public function updateJadwal($id_jadwal, $tempat_ibadah, $tgl_ibadah, $keterangan){
      $sql    = "UPDATE tb_jadwal_ekaristi SET tempat_ibadah='$tempat_ibadah', tgl_ibadah='$tgl_ibadah', 
      keterangan='$keterangan' WHERE id_jadwal = '$id_jadwal' ";
  
      $query  = $this->db->query($sql);
  
        if(!$query){
          return "error";
        } else{
            echo '<script language="javascript">alert("Berhasil mengubah jadwal!"); document.location="data-jadwal-ekaristi.php"; </script>';
        }
      }
  

    public function deleteJadwal($id_jadwal){
      $sql   = "DELETE FROM tb_jadwal_ekaristi WHERE id_jadwal = '$id_jadwal' ";
      
      $query = $this->db->query($sql);
  
      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus jadwal!"); document.location="data-jadwal-ekaristi"; </script>';
      }
    }
  
  }

// Class Pengumuman

class Pengumuman{
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function addAttention($judul_pengumuman, $isi_pengumuman, $tgl_pengumuman){
    $sql    = "INSERT INTO tb_pengumuman (judul_pengumuman, isi_pengumuman, tgl_pengumuman) VALUES ('$judul_pengumuman', 
    '$isi_pengumuman', '$tgl_pengumuman')";

    $query  = $this->db->query($sql);

    if(!$query){
        return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="data-pengumuman"; </script>';
    }
  }

  public function showAttention(){
    $sql    = "SELECT * FROM tb_pengumuman";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function sumAttention(){
    $sql    = "SELECT COUNT(*) FROM tb_pengumuman";
    $query  = $this->db->query($sql);
    return $query;
  }

  public function editAttention($id_pengumuman){
    $sql    = "SELECT * FROM tb_pengumuman WHERE id_pengumuman = '$id_pengumuman' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updateAttention($id_pengumuman, $judul_pengumuman, $isi_pengumuman, $tgl_pengumuman){
    $sql    = "UPDATE tb_pengumuman SET judul_pengumuman='$judul_pengumuman', isi_pengumuman='$isi_pengumuman', 
    tgl_pengumuman='$tgl_pengumuman' WHERE id_pengumuman = '$id_pengumuman' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah pengumuman!"); document.location="data-pengumuman.php"; </script>';
      }
    }

    public function deleteAttention($id_pengumuman){
      $sql   = "DELETE FROM tb_pengumuman WHERE id_pengumuman = '$id_pengumuman' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus pengumuman!"); document.location="data-pengumuman"; </script>';
      }
    }

}

//Class Kedukaan
class Kedukaan{

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function addKedukaan($nama_duka, $berita_kedukaan, $tgl_kedukaan, $tgl_pemakaman){
    $sql    = "INSERT INTO tb_kedukaan (nama_duka, berita_kedukaan, tgl_kedukaan, tgl_pemakaman) VALUES 
    ('$nama_duka', '$berita_kedukaan', '$tgl_kedukaan', '$tgl_pemakaman')";

    $query  = $this->db->query($sql);

    if(!$query){
        return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah data!"); document.location="data-kedukaan"; </script>';
    }
  }

  public function showKedukaan(){
    $sql    = "SELECT * FROM tb_kedukaan";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function sumKedukaan(){
    $sql    = "SELECT COUNT(*) FROM tb_kedukaan";
    $query  = $this->db->query($sql);
    return $query;
  }

  public function editKedukaan($id_kedukaan){
    $sql    = "SELECT * FROM tb_kedukaan WHERE id_kedukaan = '$id_kedukaan' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updateKedukaan($id_kedukaan, $nama_duka, $berita_kedukaan, $tgl_kedukaan, $tgl_pemakaman){
    $sql    = "UPDATE tb_kedukaan SET nama_duka='$nama_duka', berita_kedukaan='$berita_kedukaan', 
    tgl_kedukaan='$tgl_kedukaan', tgl_pemakaman='$tgl_pemakaman' WHERE id_kedukaan = '$id_kedukaan' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah data!"); document.location="data-kedukaan"; </script>';
      }
    }

    public function deleteKedukaan($id_kedukaan){
      $sql   = "DELETE FROM tb_kedukaan WHERE id_kedukaan = '$id_kedukaan' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus data!"); document.location="data-kedukaan"; </script>';
      }
    }

}

//Class ulang tahun umat

class Ultah{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  
  public function addUltah($nama_umat, $tgl_lahir){
    $sql    = "INSERT INTO tb_ultah (nama_umat, tgl_lahir) VALUES ('$nama_umat','$tgl_lahir') ";
    $query  = $this->db->query($sql);

    if(!$query){
      return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="data-ulang-tahun-umat.php"; </script>';
    }
  }

  public function showUltah(){
    $sql    = "SELECT * FROM tb_ultah";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function sumUltah(){
    $sql    = "SELECT COUNT(*) FROM tb_ultah";
    $query  = $this->db->query($sql);
    return $query;
  }

  
  public function editUltah($id_ultah){
    $sql    = "SELECT * FROM tb_ultah WHERE id_ultah = '$id_ultah' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updateUltah($id_ultah, $nama_umat, $tgl_lahir){
    $sql    = "UPDATE tb_ultah SET nama_umat='$nama_umat', tgl_lahir='$tgl_lahir' WHERE id_ultah = '$id_ultah' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah data!"); document.location="data-ulang-tahun-umat"; </script>';
      }
    }

    public function deleteUltah($id_ultah){
      $sql   = "DELETE FROM tb_ultah WHERE id_ultah = '$id_ultah' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus data!"); document.location="data-ulang-tahun-umat"; </script>';
      }
    }

}


//Kegiatan Liturgi
class KegiatanLiturgi{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function showKegiatan(){
    $sql    = "SELECT * FROM tb_kegiatan";
    $query  = $this->db->query($sql);

    return $query;
  }

  public function sumKegiatan(){
    $sql    = "SELECT COUNT(*) FROM tb_kegiatan";
    $query  = $this->db->query($sql);
    return $query;
  }

  public function deleteKegiatan($id_kegiatan){
    $sql   = "DELETE FROM tb_kegiatan WHERE id_kegiatan = '$id_kegiatan' ";
    
    $query = $this->db->query($sql);

    if(!$query){
      return $php_errormsg;
    } else{
        echo '<script language="javascript">alert("Berhasil menghapus foto!"); document.location="data-kegiatan-liturgi"; </script>';
    }
  }

}

//Classpetugas liturgi

class PetugasLiturgi{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  
  public function addPetugas($nama_petugas, $no_telefon, $alamat){
    $sql    = "INSERT INTO tb_petugas (nama_petugas, no_telefon, alamat) VALUES ('$nama_petugas','$no_telefon', '$alamat') ";
    $query  = $this->db->query($sql);

    if(!$query){
      return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="data-petugas-liturgi.php"; </script>';
    }
  }

  public function showPetugas(){
    $sql    = "SELECT * FROM tb_petugas";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function sumPetugas(){
    $sql    = "SELECT COUNT(*) FROM tb_petugas";
    $query  = $this->db->query($sql);
    return $query;
  }

  
  public function editPetugas($id_petugas){
    $sql    = "SELECT * FROM tb_petugas WHERE id_petugas = '$id_petugas' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updatePetugas($id_petugas, $nama_petugas, $no_telefon, $alamat){
    $sql    = "UPDATE tb_petugas SET nama_petugas='$nama_petugas', no_telefon='$no_telefon', alamat='$alamat' WHERE id_petugas = '$id_petugas' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah data!"); document.location="data-petugas-liturgi"; </script>';
      }
    }

    public function deletePetugas($id_petugas){
      $sql   = "DELETE FROM tb_petugas WHERE id_petugas = '$id_petugas' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus data!"); document.location="data-petugas-liturgi"; </script>';
      }
    }

}

//Class Pewartaan
class Pewartaan{

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function addPewartaan($judul_berita, $kategori_pewartaan, $berita_pewartaan, $tgl_pewartaan){
    $sql    = "INSERT INTO tb_pewartaan (judul_berita, kategori_pewartaan, berita_pewartaan, tgl_pewartaan) VALUES 
    ('$judul_berita', '$kategori_pewartaan', '$berita_pewartaan', '$tgl_pewartaan')";

    $query  = $this->db->query($sql);

    if(!$query){
        return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah data!"); document.location="data-pewartaan"; </script>';
    }
  }

  public function showPewartaan(){
    $sql    = "SELECT * FROM tb_pewartaan";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function showPiud(){
    $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='PIUD'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  public function showOmk(){
    $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='OMK'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  public function showLansia(){
    $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='Lansia'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  public function showKatekis(){
    $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='Katekis'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  

  public function sumPewartaan(){
    $sql    = "SELECT COUNT(*) FROM tb_pewartaan";
    $query  = $this->db->query($sql);
    return $query;
  }

  public function editPewartaan($id_pewartaan){
    $sql    = "SELECT * FROM tb_pewartaan WHERE id_pewartaan = '$id_pewartaan' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updatePewartaan($id_pewartaan, $judul_berita, $kategori_pewartaan, $berita_pewartaan, $tgl_pewartaan){
    $sql    = "UPDATE tb_pewartaan SET judul_berita='$judul_berita', kategori_pewartaan='$kategori_pewartaan', 
    berita_pewartaan='$berita_pewartaan', tgl_pewartaan='$tgl_pewartaan' WHERE id_pewartaan = '$id_pewartaan' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah data!"); document.location="data-pewartaan"; </script>';
      }
    }

    public function deletePewartaan($id_pewartaan){
      $sql   = "DELETE FROM tb_pewartaan WHERE id_pewartaan = '$id_pewartaan' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus data!"); document.location="data-pewartaan"; </script>';
      }
    }

}

//Class Pelayanan
class Pelayanan{

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function addPelayanan($judul_berita, $kategori_pelayanan, $berita_pelayanan, $tgl_pelayanan){
    $sql    = "INSERT INTO tb_pelayanan (judul_berita, kategori_pelayanan, berita_pelayanan, tgl_pelayanan) VALUES 
    ('$judul_berita', '$kategori_pelayanan', '$berita_pelayanan', '$tgl_pelayanan')";

    $query  = $this->db->query($sql);

    if(!$query){
        return "error";
    } else{
        echo '<script language="javascript">alert("Berhasil menambah data!"); document.location="data-pelayanan-masyarakat"; </script>';
    }
  }

  public function showPelayanan(){
    $sql    = "SELECT * FROM tb_pelayanan";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function showKesehatan(){
    $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='Kesehatan Masyarakat'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  public function showHubungan(){
    $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='Hubungan Masyarakat'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  public function showPSE(){
    $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='PSE'";
    
    $query  = $this->db->query($sql);
    return $query;
  }
  

  public function sumPelayanan(){
    $sql    = "SELECT COUNT(*) FROM tb_pelayanan";
    $query  = $this->db->query($sql);
    return $query;
  }

  public function editPelayanan($id_pelayanan){
    $sql    = "SELECT * FROM tb_pelayanan WHERE id_pelayanan = '$id_pelayanan' ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

  public function updatePelayanan($id_pelayanan, $judul_berita, $kategori_pelayanan, $berita_pelayanan, $tgl_pelayanan){
    $sql    = "UPDATE tb_pelayanan SET judul_berita='$judul_berita', kategori_pelayanan='$kategori_pelayanan', 
    berita_pelayanan='$berita_pelayanan', tgl_pelayanan='$tgl_pelayanan' WHERE id_pelayanan = '$id_pelayanan' ";

    $query  = $this->db->query($sql);

      if(!$query){
        return "error";
      } else{
          echo '<script language="javascript">alert("Berhasil mengubah data!"); document.location="data-pelayanan-masyarakat"; </script>';
      }
    }

    public function deletePelayanan($id_pelayanan){
      $sql   = "DELETE FROM tb_pelayanan WHERE id_pelayanan = '$id_pelayanan' ";
      
      $query = $this->db->query($sql);

      if(!$query){
        return $php_errormsg;
      } else{
          echo '<script language="javascript">alert("Berhasil menghapus data!"); document.location="data-pelayanan-masyarakat"; </script>';
      }
    }

}


?>
