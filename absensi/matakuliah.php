<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Mata Kuliah</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
		
		
		<form action="" method="post">
		<table>
	<tr>
<td>Kode Mata Kuliah</td><td>
			  <input type="text" size="20" name="no_matakuliah"  />
			</td>
		</tr>
		<tr>
			<td>Mata Kuliah</td><td>
			  <input type="text" size="20" name="mata_kuliah"  />
			
			  </td>
		</tr>
		
           <tr>
			<td></td>
			<td><input name="submit" type="submit" value="Simpan" />
		    <input name="reset" type="reset" value="Reset" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['no_matakuliah'])){
			$no_matakuliah=strtoupper($_POST['no_matakuliah']);
			$mata_kuliah=$_POST['mata_kuliah'];
			
			
			$query=mysql_query("insert into matakuliah(no_matakuliah ,mata_kuliah) values('$no_matakuliah','$mata_kuliah')" ,$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['no_matakuliah']);
		}
	
		
		//untuk menampilkan
		$query=mysql_query("select * from matakuliah order by mata_kuliah asc");?>
		<center><table class="datatable"><tr bgcolor=#FF9900 >
<td width="25"><b><center>No</td>
<td width="75"><b><center>kode mata kuliah</td>
<td width="150"><b><center>Mata Kuliah</td>
<td width="45"><b><center>Edit</td>
<td width="60"><b><center>Delete</td>

		</tr>
	
<?php		
$no=1;
while($var=mysql_fetch_array($query)){
	
echo "<tr>
<td>$no</td>
<td><center>$var[no_matakuliah]</td>
<td><center>$var[mata_kuliah]</td>
<td><center><a href='admin.php?page=formeditmatakuliah&kd_matakuliah=$var[kd_matakuliah]'>Edit</a></center></td>
<td><center><a href='deletematakuliah.php?kd_matakuliah=$var[kd_matakuliah]'>Delete</a></td>

</tr>";
$no++;
}?>
		</table>
				
		</p>
  </div>
</div>


