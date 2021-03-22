<?php
    session_start();

    include 'connection.php';

    $username       = $_POST['username'];
    $password       = md5($_POST['password']);

    //seleksi data login brow

    $login          = mysqli_query($conn,"SELECT * FROM st_admin WHERE username='$username' AND password='$password' ");
    //hitung jumlah data yang ditemukan

    $check          = mysqli_num_rows($login);
    //cek di database

    if($check>0) {

        $data = mysqli_fetch_assoc($login);
            // buat session login dan username
        	if($data['username']==$username){
 
                // buat session login dan username
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;

                echo '<script language="javascript">alert("Anda berhasil Login!"); 
                document.location="../admin/index"; </script>';
         
            }
        }	
        else{
        echo '<script language="javascript">alert("Username atau password salah!"); 
        document.location="../login"; </script>';
        }
?>