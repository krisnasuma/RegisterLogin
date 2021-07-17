<?php
    //mengaktifkan session php
    session_start();

    //menghubungkan dengan koneksi database
    include '../fungsi/koneksi.php';
    
    //menangkap data yang dikirim dari form login
    $username = $_POST['username']; 
    $password = $_POST['password'];
    
    $hash = md5($password);

    //$username = mysqli_real_escape_string($_POST['username']);
    //$password = mysqli_real_escape_string($_POST['password']);

    
    $result = mysqli_query($koneksi, "SELECT * FROM tblaccount WHERE username ='$username' AND password ='$hash'") or die ("Kesalahan Verifikasi");
    $array_tampil = mysqli_num_rows($result);

    //if ($array_tampil['username'] == $username) {
    if ($array_tampil > 0) {

        $data = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $username;
        $_SESSION['fname'] = $data['fname'];
        $_SESSION['lname'] = $data['lname'];
        $_SESSION['user_Id'] = $data['user_Id'];

        //setelah login benar, akan ada session_start 
        //menuju page yang bisa diakses pengguna.
        header("Location: beranda.php");
    }
    
    else {
         //notifikasi gagal masuk dengan identitas yang benar
        echo '<script language="javascript">';
        echo 'alert("Username dan Password Salah")';
        echo '</script>';

        //jika salah maka dikembalikan ke page awal di index.php
        echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
    }
?>