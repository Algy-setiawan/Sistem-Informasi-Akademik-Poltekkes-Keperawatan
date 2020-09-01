<?php include ("cek_session.php")
?>
<link href="style.css" rel="stylesheet" type="text/css" />

<div class="post">
	<h2 class="title"><a href="#">Halaman Koordinator</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
 
		<p>
		
		<form action="?page=dosen" method="post">
		<table>
		<tr>
			<td>NIP</td><td><input type="text" size="20" name="no_dosen"  /></td>
		</tr>
		<tr>
		  <td>Koordinator</td>
		    <td><input type="text" size="20" name="nama_dosen" /></td>
		  <tr>
		  <td>Bidang</td>
		    <td><input type="text" size="20" name="bidang" /></td>
		<tr>
			<td></td><td><input name="submit" type="submit" value="Simpan" />
			<input name="reset" type="reset" value="Reset" /></td>
		</tr>
		<tr>
			<td></td>
			<td>&nbsp;</td>
		</tr>
		</table>
		</form>
		
		<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['nama_dosen'])){
			$no_dosen=strtoupper($_POST['no_dosen']);
			$nama_dosen=$_POST['nama_dosen'];
			$bidang=$_POST['bidang'];
			
			$query=mysql_query("insert into dosen(no_dosen , nama_dosen, bidang) values('$no_dosen','$nama_dosen','$bidang')" ,$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nama_dosen']);
		}
	
		
		//untuk menampilkan
		$query=mysql_query("select * from dosen order by nama_dosen asc");?>
		<center><table class="datatable"><tr bgcolor=#FF9900 >
<td width="25"><b><center>No</td>
<td width="75"><b><center>NIP</td>
<td width="150"><b><center>Koordinator</td>
<td width="150"><b><center>Bidang</td>
<td width="84"><center><b>Upload Jurnal</td>
<td width="84"><center><b>Edit</td>
<td width="60"><b><center>Delete</td>

		</tr>
	
<?php		
$no=1;
while($var=mysql_fetch_array($query)){
	
echo "<tr>
<td>$no</td>
<td>$var[no_dosen]</td>
<td>$var[nama_dosen]</td>
<td>$var[bidang]</td>
<td><center><a href='admin.php?page=upload'>upload jurnal</a></td>
<td><center><a href='admin.php?page=formeditdosen&kd_dosen=$var[kd_dosen]'>Edit</a></td>
<td><center><a href='deletedosen.php?kd_dosen=$var[kd_dosen]'>Delete</a></td>

</tr>";
$no++;

}?>
		</table>
				
		</p>
  </div>
</div>


