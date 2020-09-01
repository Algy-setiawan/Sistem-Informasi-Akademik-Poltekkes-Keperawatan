<?php
	//lanjutkan session yang sudah dibuat sebelumnya
	session_start();
	unset($_SESSION['username']);
	unset($_SESSION['kd_dosen']);
	//hapus session yang sudah dibuat
	session_destroy();

	//redirect ke halaman login
	header('location:/index.php?p=login');
?>
