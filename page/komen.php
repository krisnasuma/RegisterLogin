<?php
    session_start();

    if (isset($_SESSION['username'])&&$_SESSION['username']!="") {
    }
    else {

        //jika salah maka dikembalikan ke page awal di index.php
        header("Location:../index.php");
    }

    $username = $_SESSION['username'];

    //akan tampil userid
    $userid = $_SESSION['user_Id'];
?>