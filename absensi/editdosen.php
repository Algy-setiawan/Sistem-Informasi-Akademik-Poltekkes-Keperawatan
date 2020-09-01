
<?php ob_start();
include "conn.php";
$kd_dosen    		= $_POST['kd_dosen'];
$no_dosen    		= $_POST['no_dosen'];
$nama_dosen          = $_POST['nama_dosen'];
$bidang         = $_POST['bidang'];

$query=mysql_query("update dosen set kd_dosen='$kd_dosen' ,no_dosen='$no_dosen', nama_dosen='$nama_dosen', bidang='$bidang' where kd_dosen='$kd_dosen'");
header('location:admin.php?page=dosen');
?>