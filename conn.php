	<?php
	//koneksi ke database
	$conn = mysql_connect('localhost', 'ccjurwat_32', 'Rahasia32');
	mysql_select_db('ccjurwat_jurwat');
	//membaca data dari database
	$result = mysql_query("select * from foto");
	//menampilkan foto
	?>