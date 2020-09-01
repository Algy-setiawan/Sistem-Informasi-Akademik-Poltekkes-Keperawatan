<?php
include "conn.php";

$username = $_POST['username'];
$password     = $_POST['password'];
	$username = mysql_real_escape_string($username);
	$password = MD5(mysql_real_escape_string($password));
$login=mysql_query("SELECT * FROM dosen WHERE username='$username' AND password='$password'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if ($ketemu > 0){
  session_start();
  $_SESSION[username]     = $r[username];
  $_SESSION[password]     = $r[password];
  $_SESSION[kd_dosen]    = $r[kd_dosen];
  
  
  if($_SESSION[kd_dosen]==1){
	header('location:dosen/index.php?p=home');
  } else if($_SESSION[kd_dosen]==2){
	header('location:mahasiswa/index.php?p=home');
  } if($_SESSION[kd_dosen]==3){
	header('location:C.html');
  }
}
else{
header('location:index.php?p=gagal');
}
?>
