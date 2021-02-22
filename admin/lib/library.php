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

  public function addJadwalEka(){
    $sql    = "SELECT * FROM jadwal_ekaristi() VALUES ";
    $query  = $this->db->query($sql);

    if(!$query){
      return $php_errormsg;
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="index.php"; </script>';
    }    
  }

  public function editJadwalEka($id_jdwl_eka){
    $sql    = "SELECT * FROM jadwal_ekaristi() WHERE id_jdwl_eka = '$id_jdwl_eka' ";
    $query  = $this->db->query($sql);

    return $query;
  }

  public function updateJadwalEka($id_jdwl_eka){
    $sql    = "UPDATE jadwal_ekaristi SET blablabla WHERE id_jdwl_eka = '$id_jdwl_eka' ";
    $query  = $this->db->query($sql);


    if(!$query){
      return $php_errormsg;
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="index.php"; </script>';
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
    $sql    = "UPDATE tb_kedukaan SET nama_duka='$nama_duka', berita_kedukaan='$berita_keduaan', 
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
  
  public function addUltah(){
    $sql    = "INSERT INTO tb_ultah(nama_ummat, tgl_lahir) VALUES '$nama_ummat','$tgl_lahir' ";
    $query  = $this->db->query($sql);

    if(!$query){
      return $php_errormsg;
    } else{
        echo '<script language="javascript">alert("Berhasil menambah pengumuman!"); document.location="index.php"; </script>';
    }
  }

}

?>