<?php
//hanya versi 7.x yang menggunakan fungsi "sqli"
//buat variable koneksi untuk untuk mendefinisikan nama localhost, user sql, password sql, nama database
$koneksi=mysqli_connect("localhost","root","","dbforum",3306);
//jika gagal terhubung akan menampilkan pesan
if (mysqli_connect_errno()) {
    echo "Gagal untuk terhubung :(".mysqli_connect_error();
}
?>