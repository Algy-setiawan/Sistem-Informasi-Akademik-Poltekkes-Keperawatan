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

<div class="post">
	<h2 class="title"><a href="#">REKAP ABSENSI KELAS <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>

</em></p>
	<div class="entry">
		<p>
		<form action="?page=rekap_absensi" method="post" name="postform">
		<form action="?page=cetaklaporan" method="post" name="postform">
		<table width="99%" border="0" class="datatable">
		<tr>
			<td width="6%" align="left"> <div align="left">Tanggal</div></td>
		  <td width="28%" align="left"><input type="text" name="tgl1"  value="" size="11" placeholder="yyyy/mm/dd" required/>
	      <a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl1);return false;" ></a></td>
		  <td width="14%" align="left"><div align="right">s/d Tanggal</div></td>
		  <td width="28%" align="left"><input type="text" name="tgl2"  value="" placeholder="yyyy/mm/dd"size="11" required><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl2);return false;" ></a></td>
			<td width="24%">
			<select name="kelas">
			<option value="0" selected="selected">Pilih Kelas</option>
			<?php 
			
			$query=mysql_query("select * from kelas order by nama_kelas asc",$koneksi);
			
			while($row=mysql_fetch_array($query))
			{
				?><option value="<?php  echo $row['kd_kelas']; ?>"><?php  echo $row['nama_kelas']; ?></option><?php 
			}
			
			?>
			</select>		  </td>
		</tr>
		<tr><td colspan="4" align="left"><input type="submit" value="Tampilkan">
		<td align="center"><a href='?page=Laporan' title='strukturkode blog'><img src='images/printer-orange.png' alt='blog untuk belajar seo dan blog' title='Halaman Print' width='50' height='50' border='no' /></a></td></tr>
		</table>	
		</form>
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
Nama Kelas : <?php echo $siswa['nama_kelas'];?><br>
Mata Kuliah : <?php echo $siswa['mata_kuliah'];?>
<br>Koordinator : <?php echo $siswa['nama_dosen'];?>
<br>Tanggal : <?php date_default_timezone_set("Asia/Bangkok");
echo date(" j \ F Y ") . "<br>";
?>
<br>
		<table class="datatable">
		<tr>
			<th>No</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>L/P</th>
			<th>Tanggal</th>
			<th>s/d Tanggal</th>
			<th>Hadir (H)</th>
			<th>Sakit (S)</th>
			<th>Ijin (I)</th>
			<th>Alfa (A)</th>
		</tr>
		<?php
    // Fungsi untuk Merubah susunan format tanggal
    function ubahformatTgl($tanggal) {
        $pisah = explode('/',$tanggal);
        $urutan = array($pisah[2],$pisah[1],$pisah[0]);
        $satukan = implode('-',$urutan);
        return $satukan;
    }
	
	
			
		//untuk option
		$tanggal1=$_POST['tgl1'];
		$tanggal2=$_POST['tgl2'];
		$kelas=$_POST['kelas'];
		$ubahtgl1 = ubahformatTgl($tanggal1);
		$ubahtgl2 = ubahformatTgl($tanggal2);
		$query=mysql_query("select distinct kd_siswa from absensi where kd_kelas='$kelas' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc , kd_siswa asc",$koneksi);
	
		
		while($row=mysql_fetch_array($query)){
			$siswa=mysql_fetch_array(mysql_query("select * from siswa where kd_siswa='$row[kd_siswa]' order by nama asc , NIM asc",$koneksi));
			$kelas=mysql_fetch_array(mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]'",$koneksi));

			
			$keterangan=$row['keterangan'];
			
			?>
			
			<tr>
			
				<td><?php echo $c=$c+1;?></td>
				<td><?php echo $siswa['NIM'];?></td>
				<td><?php echo $siswa['nama'];?></td>
				<td><?php echo $siswa['jk'];?></td>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='h' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $tanggal1;
				?>
				<td align="center">
				<?php
					$hadir=mysql_query("select * from absensi where kd_siswa='$row[kd_siswa]' and keterangan='h' and tanggal between '$tanggal1' and '$tanggal2' order by tanggal desc",$koneksi);
					
					$jumlah=mysql_num_rows($hadir);
					echo $tanggal2;
				?>
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
			
		}}
		?>
		
		</table>



  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>