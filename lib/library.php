<?php

//Class User

class Library {

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

  public function showAttention(){
    $sql    = "SELECT isi_pengumuman, tgl_pengumuman FROM tb_pengumuman ORDER BY tgl_pengumuman DESC LIMIT 3 ";
    
    $query  = $this->db->query($sql);
    return $query;
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