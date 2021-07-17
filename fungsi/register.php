<?php
include "koneksi.php";

extract($_POST);
    $fname = str_replace("'","`",$fname);
    $fname = mysqli_real_escape_string($koneksi, $_POST['fname']);

    $lname = str_replace("'","`",$lname);
    $lname = mysqli_real_escape_string($koneksi, $_POST['lname']);

    $username = str_replace("'","`",$username);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);

    $password = str_replace("'","`",$password);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    //password akan di simpan dalam bentuk hash pada tbluser
    $password = md5($password);

    //menyimpan / create ke tbluser
    $sql = "INSERT INTO `tbluser` (`fname`, `lname`, `gender`) VALUES ('$fname', '$lname', '$gender')";
    $result = mysqli_query($koneksi, $sql);

    if ($result) {
        $a = mysqli_query($koneksi, "SELECT * FROM `tbluser` WHERE `fname` = '$fname' ");
        $aa = mysqli_fetch_array($a);
        
        if ($a) {
            $aaa = $aa['user_Id'];
            $sql = "INSERT INTO `tblaccount` (`username`, `password`, `user_Id`) VALUES ('$username', '$password', '$aaa')";

            $res = mysqli_query($koneksi, $sql);

            if ($res==true) {
                echo '<script language="javascript">';
                echo 'alert("Behasil Terdaftar")';
                echo '</script>';

                //sumber data form pendaftaran dari page index.php && dikembalikan ke page index.php
                echo '<meta http-equiv="refresh" content="0;url=../index.php" />';
            }
        }
    }

?>