<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Edit Koordinator</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
		<p>
<?php 
include "conn.php";
$kd_dosen=$_GET['kd_dosen'];
$query=mysql_query("select * from dosen where kd_dosen='$kd_dosen'");
?>
<html><head><title>Halaman Edit Data Koordinator</title><head><body>
<form action="editdosen.php" method="post">
<table border="0">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>" />
<h2>Data Koordinator</h2>
<form action="?page=home" method="POST">
<table><tr>
<td></td>
<td> 
  <input type="hidden" name="kd_dosen" value="<?php echo $row['kd_dosen'];?>" size="10" ></td>
</tr>

<tr>
<td>NIP</td>
<td>: 
  <input type="text" name="no_dosen" value="<?php echo $row['no_dosen'];?>" size="10" ></td>
</tr>
<tr>
<td>Koordinator</td>
<td>: <input type="text" name="nama_dosen" value="<?php echo $row['nama_dosen'];?>"size="30"></td>
</tr>
	<tr>
<td>Bidang</td>
<td>: <input type="text" name="bidang" value="<?php echo $row['bidang'];?>"size="30"></td>
</tr>		

<tr>
<td colspan=2><input type="submit" value="Update">
  <input name="reset" type="reset" value="Reset" /></td>
</tr>
<?php } ?>
</table>
</form>
</p>
  </div>
</div>

</body></html>