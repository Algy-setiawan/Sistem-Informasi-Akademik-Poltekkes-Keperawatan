<?php include ("cek_session.php")
?>
<?php 
	include "conn.php";
	$kd_kelas=$_GET['kd_kelas'];
	$query=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$kd_kelas'"));
?>
<div class="post">
	<h2 class="title"><a href="#">ABSENSI KELAS <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>

</em></p>
	<div class="entry">
		<p>
		<form action="?page=proses" method="post" name="postform">
		<input type="hidden" value="<?php echo $query['kd_kelas'];?>" name="kd_kelas"/>
		<table class="datatable">
		<tr>
			<td width="24%" align="left" colspan="6">Tanggal : <input type="text" name="tanggal"  value="<?php date_default_timezone_set("Asia/Bangkok");
echo date("d/m/Y") . "";
?>" size="11"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tanggal);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="29" border="0" alt=""></a></td>
		</tr>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Hadir (H)</th>
			<th>Sakit (S)</th>
			<th>Ijin (I)</th>
			<th>Alfa (A)</th>
		</tr>
		<?php
		//penting nech buat kasih nilai awal cekbox
		$no=0;
		
		$query=mysql_query("select * from siswa where kd_kelas2='$kd_kelas' or kd_kelas='$kd_kelas' or kd_kelas3='$kd_kelas' or kd_kelas4='$kd_kelas' or kd_kelas5='$kd_kelas' or kd_kelas6='$kd_kelas' or kd_kelas7='$kd_kelas' or kd_kelas8='$kd_kelas' order by nama asc , NIM asc");
		while($row=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $c=$c+1;?></td><td><?php echo $row['nama'];?></td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=hadir[] value=$row[kd_siswa] id='$no'>";
				$no++;
				?>
			</td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=sakit[] value=$row[kd_siswa] id=$no>";
				$no++;
				?>
			</td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=ijin[] value=$row[kd_siswa] id=$no>";
				$no++;
				?>
			</td>
			<td align="center">
				<?php
				echo "<input type=checkbox name=alfa[] value=$row[kd_siswa] id=$no>";
				$no++;
				?>
			</td>
		</tr>
		<?php
		}
		
	
		?>
		</table>
		<br />
		<input type="checkbox" name="selesai" value="yes" />Tandai Kelas Selesai
		<br /><br />
		<input type="submit" value="Submit" />
		</form>
		</p>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
