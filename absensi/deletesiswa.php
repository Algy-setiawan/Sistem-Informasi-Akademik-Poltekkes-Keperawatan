<?php ob_start();
 include "conn.php";
 
 mysql_query("delete from siswa where kd_siswa='$_GET[kd_siswa]'");
 header('location:siswa.php');

?>