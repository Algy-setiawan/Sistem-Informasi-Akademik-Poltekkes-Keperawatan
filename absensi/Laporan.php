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
	<h2 class="title"><a href="#">CETAK LAPORAN <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta"><em><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>

</em></p>
	<div class="entry">
		<p>

		<form action="cetaklaporan.php" method="post" name="postform">
		<table width="99%" border="0" class="datatable">
		<tr>
			<td width="6%" align="left"> <div align="left">Tanggal</div></td>
		  <td width="28%" align="left"><input type="text" name="tgl1"  value="" placeholder="yyyy/mm/dd" required size="11">
	      <a href="javascript:void(0)" onclick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl1);return false;" ></a></td>
		  <td width="14%" align="left"><div align="right">s/d Tanggal</div></td>
		  <td width="28%" align="left"><input type="text" name="tgl2"  value="" placeholder="yyyy/mm/dd" required size="11"><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.postform.tgl2);return false;" ></a></td>
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
		<tr><td colspan="5" align="left"><input type="submit" value="Cetak">&nbsp; &nbsp; &nbsp;
		</td></tr>
		</table>	
		</form>	
		<br />
	</div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>