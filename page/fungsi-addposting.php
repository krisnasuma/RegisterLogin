<?php
    //hubungkan ke koneksi databases
    include "../fungsi/koneksi.php";

    //saat menambah diskusi, waktu posting akan dimasukkan ke tblpost (bagian date time)
    date_default_timezone_set("Asia/Taipei");
    $date_time = date("Y-m-d h:i:sa");

    extract($_POST);

    $query = "INSERT INTO tblpost (title,content,cat_id,datetime,user_Id) VALUES ('$title','$content','$category','$date_time','$userid')";
    $res = mysqli_query($koneksi,$query);

    if ($res==true) {

        echo '<script language="javascript">';
        echo 'alert("Posting Komentar Berhasil")';
        echo '</script>';

        //jika input berhasil maka akan dikembalikan ke page beranda.php
        echo '<meta http-equiv="refresh" content="0;url=beranda.php" />';
    }
?>