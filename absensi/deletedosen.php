
<?php ob_start();
 include "conn.php";
 
 mysql_query("delete from dosen where kd_dosen='$_GET[kd_dosen]'");
 header('location:admin.php?page=dosen');

?>