
<?php ob_start();
 include "conn.php";
 
 mysql_query("delete from matakuliah where kd_matakuliah='$_GET[kd_matakuliah]'");
 header('location:admin.php?page=matakuliah');

?>