<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Edit Kelas Dan Koordinator</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
		<p>
<?php 
include "conn.php";
$kd_kelas=$_GET['kd_kelas'];
$query=mysql_query("select * from kelas where kd_kelas='$kd_kelas'");
?>
<html><head><title>Halaman Edit Data Kelas</title><head><body>
<form action="editkelas.php" method="post">
<table border="0">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>" />
<h2>Data Kelas Dan Koordinator</h2>
<form action="?page=home" method="POST">
<table><tr>
<td></td>
<td> 
  <input type="hidden" name="kd_kelas" value="<?php echo $row['kd_kelas'];?>" size="10" ></td>
</tr>
<tr>
<td>Nama Kelas</td>
<td>: <input type="text" name="nama_kelas" value="<?php echo $row['nama_kelas'];?>"size="30"></td>
</tr>
<tr>
<tr>
			<td>Mata Kuliah</td>
	  <td>:      
	    <select name="mata_kuliah" >
          <option value="<?php echo $row['mata_kuliah'];?>" selected="selected"><?php echo $row['mata_kuliah'];?></option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from matakuliah order by mata_kuliah asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value= "<?php  echo $var['mata_kuliah']; ?>">
          <?php  echo $var['mata_kuliah']; ?>
          </option>
          <?php 
			}
			?>
        </select></td>
	</tr>
 <tr>
			<td>Koordinator</td>
			<td>: <select name="nama_dosen">
              <option value="<?php echo $row['nama_dosen'];?>" selected="selected"><?php echo $row['nama_dosen'];?></option>
              <?php 
			include "conn.php";
			
			$query=mysql_query("select * from dosen order by nama_dosen asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
			  <option value="<?php  echo $var['nama_dosen']; ?>">
			    <?php  echo $var['nama_dosen']; ?>
		      </option>
			  <?php 
			}
			?>
            </select></td>
		</tr>

<tr>
<script type="text/javascript">

</script>
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