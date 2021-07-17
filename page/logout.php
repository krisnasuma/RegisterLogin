<?php
    //mengaktifkan session
    session_start();

    //mengapus semua session
    //session_destroy();

    // mengalihkan ke halaman login
    //header("Location:../index.php?Pesan=Anda berhasil keluar.");


    if (isset($_SESSION['username'])) {
        session_destroy();

        //jika berhasil logout, maka dikembalikan 
        //ke page awal di index.php
        header("Location:../index.php");
    }
?>