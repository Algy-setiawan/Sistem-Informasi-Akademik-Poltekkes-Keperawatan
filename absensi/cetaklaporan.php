<?php include ("cek_session.php")
?>

<?php include "conn.php";
$kd_kelas=$_GET['kd_kelas'];
$query=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$kd_kelas'"));

?>
<?php include "conn.php";
$kd_kelas=$_GET['kd_kelas'];
$var=mysql_fetch_array(mysql_query("select * from absensi"));

?>
<?php
		
		//untuk option
		$tanggal1=$_POST['tgl1'];
		$tanggal2=$_POST['tgl2'];
		$kelas=$_POST['kelas'];
		
		$query=mysql_query("select distinct kd_kelas from absensi where kd_kelas='$kelas' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc , kd_siswa asc",$koneksi);
	
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$row[kd_kelas]' order by nama asc , NIM asc",$koneksi));
			
			$keterangan=$row['keterangan'];
			
			?>
<div class="post">
	<table width="700" height="140" border="1" style="border-collapse:collapse">
      <tr>
        <td width="250" rowspan="2" align="center"><img src="logo/logo.png" width="120" height="110" align="center"></td>
        <td width="650" align="center"><H4 class="title">POLITEKNIK KESEHATAN KEMENKES BANDUNG </h4></td>
        <td width="250" rowspan="2" align="center"><img src="logo/kanan.png" width="120" height="110" align="center"></td>
      </tr>
      <tr>
        <td><center>
        <h4 class="title">LAPORAN ABSENSI JURUSAN KEPERAWATAN BANDUNG</h4></td>
      </tr><br>
    </table>
	<p class="meta">
	</p>
	<div class="entry">
		
<?php
		
		//untuk option
		$tanggal1=$_POST['tgl1'];
		$tanggal2=$_POST['tgl2'];
		$kelas=$_POST['kelas'];
		
		$query=mysql_query("select distinct kd_kelas from absensi where kd_kelas='$kelas' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
	
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$row[kd_kelas]'",$koneksi));
			
			$keterangan=$row['keterangan'];
			
			?><br>

Mata Kuliah : <?php echo $siswa['mata_kuliah'];?>
<br>Koordinator : <?php echo $siswa['nama_dosen'];?>
<br>Tanggal : <?php date_default_timezone_set("Asia/Bangkok");
echo date(" j \ F Y ") . "<br>";
?>
		  		  <br>
		<table style="border-collapse:collapse;background:#FFFFFF" border="1" bordercolor="#000000" >
		<tr>
			<th style="background:#999999">No</th>
			<th style="background:#999999">Nim</th>
			<th style="background:#999999">Nama</th>
			<th style="background:#999999">L/P</th>
			<th style="background:#999999">Tanggal</th>
			<th style="background:#999999">s/d Tanggal</th>
			<th style="background:#999999">Hadir (H)</th>
			<th style="background:#999999">Sakit (S)</th>
			<th style="background:#999999">Ijin (I)</th>
			<th style="background:#999999">Alfa (A)</th>
		</tr>
		<?php
		//untuk option
		$tanggal1=$_POST['tgl1'];
		$tanggal2=$_POST['tgl2'];
		$kelas=$_POST['kelas'];
		
		$query=mysql_query("select distinct kd_siswa from absensi where kd_kelas='$kelas' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc , kd_siswa asc ",$koneksi);
	
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from siswa where kd_siswa='$row[kd_siswa]'",$koneksi));
			
			$keterangan=$row['keterangan'];
			?>
			<tr>
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $siswa['NIM'];?></td>
				<td><?php echo $siswa['nama'];?></td>
				<td align="center"><?php echo $siswa['jk'];?></td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='h' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $tanggal1;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='h' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $tanggal2;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='h' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='s' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='i' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
				</td>
				
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='a' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $jumlah;
				?>
			
		
			
			<?php
			
		}}}
		?>
		</table>
		<br>
		<br>
	<img src="images/11.png" width="50" height="50" onclick="cetak()" >
		
<script type="text/javascript">
function cetak(){
 print();
}
</script>
<p><br><center>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<em>
<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>
</p>

</em>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>