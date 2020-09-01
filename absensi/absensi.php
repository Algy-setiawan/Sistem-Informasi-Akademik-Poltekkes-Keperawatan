<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Absensi</a></h2>
	<p class="meta"><em><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>

</em></p>
	<div class="entry">
		<p>
		<table class="datatable">
		<tr>
			<th>No</th>
			<th>Nama Kelas</th>
			<th>Mata Kuliah </th>
			<th>Koordinator </th>
			<th>Jumlah Siswa</th><th>Aksi</th>
		</tr>
		<?php 
		include "conn.php";
		$kelas=mysql_query("select * from kelas order by nama_kelas asc",$koneksi);
		$matkul=mysql_query("select * from matakuliah order by mata_kuliah asc",$koneksi);

		//untuk mencari jumlah
		echo "Jumlah Kelas : ".$jumlah_kelas=mysql_num_rows($kelas);
		echo ">> Jumlah Matkul : ".$jumlah_matkul=mysql_num_rows($matkul);
		echo " >> Jumlah Siswa : ".$jumlah_siswa=mysql_num_rows(mysql_query("select * from siswa",$koneksi));
		echo "<br><br>";
		
		while($row=mysql_fetch_array($kelas)){
	
			//mencari jumlah siswa di masing-masing kelas
			$siswa=mysql_query("select * from siswa where kd_kelas='$row[kd_kelas]' or kd_kelas2='$row[kd_kelas]' or kd_kelas3='$row[kd_kelas]' or kd_kelas4='$row[kd_kelas]' or kd_kelas5='$row[kd_kelas]' or kd_kelas6='$row[kd_kelas]' or kd_kelas7='$row[kd_kelas]'or kd_kelas8='$row[kd_kelas]'",$koneksi);
			$mata_kuliah=mysql_fetch_array(mysql_query("SELECT mata_kuliah FROM matakuliah WHERE kd_matakuliah='$var[kd_matakuliah]'"));
			$jumlah=mysql_num_rows($siswa);
			
			
			
			?>
			<tr>
				<td align="center"><?php echo $c=$c+1; ?></td>
				<td align="center"><?php echo $row['nama_kelas']; ?></td>
				<td align="center"><?php echo $row['mata_kuliah']; ?></td>
				<td align="center"><?php echo $row['nama_dosen']; ?></td>
				<td align="center"><?php echo $jumlah;?> Orang</td>
				<td align="center"><a href="?page=input_absensi&kd_kelas=<?php echo $row['kd_kelas'];?>">Absensi</a></td>
			</tr>
			<?php
		}
		?>
		</table>
		</p>
  </div>
</div>

