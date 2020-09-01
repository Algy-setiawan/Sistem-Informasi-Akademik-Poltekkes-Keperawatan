<?php
	session_start();
	require_once("conn.php");
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$cekuser = mysql_query("SELECT * FROM user WHERE username = '$username' AND password='$password'");
	$hasil = mysql_fetch_array($cekuser);
	if(mysql_num_rows($cekuser) == 0) {
		echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
	} else {
		if($password <> $hasil['password']) {
			echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
		} else {
			$_SESSION['username'] = $hasil['username'];
			header('location:admin.php?page=home');
		}
	}
?>