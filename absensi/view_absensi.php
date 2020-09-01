<?php include "conn.php";
$kd_kelas=$_GET['kd_kelas'];
$query=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$kd_kelas'"));

?>
<?php include "conn.php";
$kd_kelas=$_GET['kd_kelas'];
$var=mysql_fetch_array(mysql_query("select * from absensi"));
    // Fungsi untuk Merubah susunan format tanggal
    function ubahformatTgl($tanggal) {
        $pisah = explode('/',$tanggal);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $satukan = implode('-',$urutan);
        return $satukan;
    }
?>


<div class="post">
	<h2 class="title"><a href="#">ABSENSI KELAS <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p><h2 class="title"><a href="#">
MATA KULIAH : <?php echo $query['mata_kuliah'];?>
<br>Koordinator : <?php echo $query['nama_dosen'];?>
<br></a></h2>
	<div class="entry">
		<br> <br><p>
	
		<table class="datatable">
		<tr>
			<th>No</th>
			<th>Tanggal</th>
			<th>Nama</th>
			<th>Hadir (H)</th>
			<th>Sakit (S)</th>
			<th>Ijin (I)</th>
			<th>Alfa (A)</th>
		</tr>
		<?php
		$kd_kelas=$_GET['kd_kelas'];
		$tanggal=$_GET['tanggal'];
		$ubahtgl = ubahformatTgl($tanggal);
		$query=mysql_query("select * from absensi where kd_kelas='$kd_kelas' and tanggal='$ubahtgl'",$koneksi);
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from siswa where kd_siswa='$row[kd_siswa]'",$koneksi));
			$keterangan=$row['keterangan'];
			?>
			<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $var['tanggal'];?></td>
				<td><?php echo $siswa['nama'];?></td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$ubahtgl' and keterangan='h'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$ubahtgl' and keterangan='s'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$ubahtgl' and keterangan='i'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and tanggal='$ubahtgl' and keterangan='a'",$koneksi);
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
			</tr>
			<?php
			
		}
		?>
		</table>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>