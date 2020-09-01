	<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['nama_dosen'])){
			$nama_dosen=($_POST['nama_dosen']);
			$pengumuman=$_POST['pengumuman'];
			$tgl			= date("Y-m-d");
			
			$query=mysql_query("insert into pengumuman(nama_dosen ,pengumuman ,tanggal_upload) values('$nama_dosen','$pengumuman','$tgl')" ,$koneksi);
			
			if($query){
				echo "<br>";
				header('location:index.php?p=home');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nama_dosen']);
		}