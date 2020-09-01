<?php
$server = "localhost";
$user = "ccjurwat";
$password = "@Rahasia32";
$database = "ccjurwat_dbmuhdela";
$table = "siswa";
mysql_connect($server,$user,$password) or die ("Koneksi gagal");
mysql_select_db($database) or die ("Database tidak ditemukan");
?>