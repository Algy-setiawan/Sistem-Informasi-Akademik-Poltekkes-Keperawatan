<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Edit Matakuliah</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
		<p>
<?php 
include "conn.php";
$kd_matakuliah=$_GET['kd_matakuliah'];
$query=mysql_query("select * from matakuliah where kd_matakuliah='$kd_matakuliah'");
?>
<html><head><title>Halaman Edit Data Matakuliah</title><head><body>
<form action="editmatakuliah.php" method="post">
<table border="0">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>" />
<h2>Data Matakuliah</h2>
<form action="" method="POST">
<table><tr>
<td></td>
<td> 
  <input type="hidden" name="kd_matakuliah" value="<?php echo $row['kd_matakuliah'];?>" size="10" ></td>
</tr>
<tr>
<td>Kode Mata Kuliah</td>
<td>: <input type="text" name="no_matakuliah" value="<?php echo $row['no_matakuliah'];?>"size="30"></td>
</tr>
<tr>
<td>Mata kuliah</td>
<td>: <input type="text" name="mata_kuliah" value="<?php echo $row['mata_kuliah'];?>"size="30"></td>
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