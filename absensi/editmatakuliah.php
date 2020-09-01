
<?php ob_start();
include "conn.php";
$kd_matakuliah    		= $_POST['kd_matakuliah'];
$no_matakuliah    		= $_POST['no_matakuliah'];
$mata_kuliah          = $_POST['mata_kuliah'];


$query=mysql_query("update matakuliah set kd_matakuliah='$kd_matakuliah' ,no_matakuliah='$no_matakuliah', mata_kuliah='$mata_kuliah' where kd_matakuliah='$kd_matakuliah'");
header('location:admin.php?page=matakuliah');
?>