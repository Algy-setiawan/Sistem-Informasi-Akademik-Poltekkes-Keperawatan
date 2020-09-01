<?php ob_start();
 include "conn.php";
 
 mysql_query("delete from kelas where kd_kelas='$_GET[kd_kelas]'");
 header('location:admin.php?page=kelas');

?>