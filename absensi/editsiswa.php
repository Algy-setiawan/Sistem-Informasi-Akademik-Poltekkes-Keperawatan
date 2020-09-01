<?php ob_start();
include "conn.php";
$kd_siswa    	= $_POST['kd_siswa'];
$NIM          	= $_POST['NIM'];
$nama         	= $_POST['nama'];
$smt         	= $_POST['smt'];
$jk         	= $_POST['jk'];
$tgl         	= $_POST['tgl'];
$alamat         = $_POST['alamat'];
$kd_kelas       = $_POST['kd_kelas'];
$kd_kelas2       = $_POST['kd_kelas2'];
$kd_kelas3       = $_POST['kd_kelas3'];
$kd_kelas4       = $_POST['kd_kelas4'];
$kd_kelas5       = $_POST['kd_kelas5'];
$kd_kelas6       = $_POST['kd_kelas6'];
$kd_kelas7       = $_POST['kd_kelas7'];
$kd_kelas8       = $_POST['kd_kelas8'];
$query=mysql_query("update siswa set kd_siswa='$kd_siswa', NIM='$NIM', nama='$nama', jk='$jk', smt='$smt' , tgl_lahir='$tgl', alamat='$alamat' , kd_kelas='$kd_kelas', kd_kelas2='$kd_kelas2', kd_kelas3='$kd_kelas3', kd_kelas4='$kd_kelas4', kd_kelas5='$kd_kelas5', kd_kelas6='$kd_kelas6', kd_kelas7='$kd_kelas7', kd_kelas8='$kd_kelas8' where kd_siswa='$kd_siswa'");

header('location:siswa.php');
?>