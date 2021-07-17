<?php
    session_start();
    if (isset($_SESSION['username']) &&$_SESSION['username'] !="") {

        //notifikasi jika berhasil masuk dengan benar
        //echo '<script language="javascript">';
        //echo 'alert("Berhasil Masuk")';
        //echo '</script>';
    }

    else {

        //jika salah maka dikembalikan ke page awal di index.php
        header("Location:../index.php");
    }
$username = $_SESSION['username'];
$userid = $_SESSION['user_Id'];

?>

<?php
include 'header.php'
?>

<?php
include 'body.php'
?>

<?php
include 'footer.php'
?>