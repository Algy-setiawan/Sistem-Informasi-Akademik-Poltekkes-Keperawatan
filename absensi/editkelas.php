
<?php ob_start();
include "conn.php";
$kd_kelas    		= $_POST['kd_kelas'];
$nama_kelas          = $_POST['nama_kelas'];
$mata_kuliah         = $_POST['mata_kuliah'];
$nama_dosen         = $_POST['nama_dosen'];

$query=mysql_query("update kelas set kd_kelas='$kd_kelas', nama_kelas='$nama_kelas',mata_kuliah='$mata_kuliah', nama_dosen='$nama_dosen' where kd_kelas='$kd_kelas'");
header('location:admin.php?page=kelas');
?>