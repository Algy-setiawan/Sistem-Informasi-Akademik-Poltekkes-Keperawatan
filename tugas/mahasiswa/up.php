<?php
include "session_mhs.php";
?>
<?php
			include('conn.php');
			if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				$nama_dosen			= $_POST['nama_dosen'];
				$mata_kuliah			= $_POST['mata_kuliah'];
				$kelas			= $_POST['kelas'];
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 99999999){
						$lokasi = '../files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO download VALUES(NULL, '$nama_dosen', '$kelas', '$mata_kuliah',  '$tgl',  '$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							header('location:index.php?p=uploadtugasdosen');
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>