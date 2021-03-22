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
  public function showJadwal(){
  $sql    = "SELECT * FROM tb_jadwal_ekaristi ORDER BY tgl_ibadah DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}


}


// Class Pengumuman

class Pengumuman{
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function showAttention(){
    $sql    = "SELECT * FROM tb_pengumuman ORDER BY tgl_pengumuman DESC LIMIT 5 ";
    
    $query  = $this->db->query($sql);
    return $query;
  }

}

//Class ulang tahun umat

class Ultah{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }

  public function showUltah(){
  $sql    = "SELECT * FROM tb_ultah ORDER BY tgl_lahir DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}

}

//Class petugas liturgi
class PetugasLiturgi{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  
  public function showPetugas(){
  $sql    = "SELECT * FROM tb_petugas ORDER BY no_telefon DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}

}


//Class Berita Kedukaan

class Kedukaan{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  public function showKedukaan(){
  $sql    = "SELECT * FROM tb_kedukaan ORDER BY tgl_kedukaan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}

}

//Class Pewartaan

class Pewartaan{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  public function showPiud(){
  $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='PIUD' ORDER BY tgl_pewartaan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}
public function showOmk(){
  $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='OMK' ORDER BY tgl_pewartaan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

}
public function showLansia(){
  $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='Lansia' ORDER BY tgl_pewartaan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

}
public function showKatekis(){
  $sql    = "SELECT * FROM tb_pewartaan WHERE kategori_pewartaan='Katekis' ORDER BY tgl_pewartaan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

}
}


//Class Berita Kedukaan

class KegiatanLiturgi{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  public function showKegiatan(){
  $sql    = "SELECT * FROM tb_kegiatan ORDER BY tgl_kegiatan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

  }
}

//Class Pelayanan

class Pelayanan{
  
  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;dbname=st_paulus','root','');
  }
  public function showKesehatan(){
  $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='Kesehatan Masyarakat' ORDER BY tgl_pelayanan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;
}
public function showHubungan(){
  $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='Hubungan Masyarakat' ORDER BY tgl_pelayanan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

}
public function showPse(){
  $sql    = "SELECT * FROM tb_pelayanan WHERE kategori_pelayanan='PSE' ORDER BY tgl_pelayanan DESC LIMIT 5";
    
  $query  = $this->db->query($sql);
  return $query;

}
}

?>