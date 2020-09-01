<?php include ("cek_session.php")
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Kelas</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  <div class="entry">
		
		
		<form action="?page=kelas" method="post">
		<table>
		<tr>
			<td>Nama Kelas</td><td>
			  <input type="text" size="20" name="nama_kelas"  />
			
			  </td>
		</tr>
		<tr>
			<td>Mata Kuliah</td>
			<td><select name="mata_kuliah">
              <option value="0" selected="selected">Pilih Matkul</option>
              <?php 
			include "conn.php";
			
			$query=mysql_query("select * from matakuliah order by mata_kuliah asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
              <option value="<?php  echo $var['mata_kuliah']; ?>">
              <?php  echo $var['mata_kuliah']; ?>
              </option>
              <?php 
			}
			?>
            </select></td>
		</tr>
		  <tr>
			<td>Koordinator</td>
			<td><select name="nama_dosen">
              <option value="0" selected="selected">Koordinator</option>
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
			<td></td>
			<td><input name="submit" type="submit" value="Simpan" />
		    <input name="reset" type="reset" value="Reset" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		include "conn.php";
		
		//untuk input
		if(isset($_POST['nama_kelas'])){
			$nama_kelas=strtoupper($_POST['nama_kelas']);
			$mata_kuliah=$_POST['mata_kuliah'];
			$nama_dosen=$_POST['nama_dosen'];
			
			$query=mysql_query("insert into kelas(nama_kelas ,mata_kuliah, nama_dosen) values('$nama_kelas','$mata_kuliah','$nama_dosen')" ,$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nama_kelas']);
		}
	
		
		//untuk menampilkan
		$query=mysql_query("select * from kelas order by nama_kelas asc");?>
		<center><table class="datatable"><tr bgcolor=#FF9900 >
<td width="25"><b><center>No</td>
<td width="100"><b><center>Nama Kelas</td>
<td width="150"><b><center>Mata Kuliah</td>
<td width="150"><b><center>Koordinator</td>
<td width="84"><b>Lihat Siswa </td>
<td width="45"><b><center>Edit</td>
<td width="60"><b><center>Delete</td>

		</tr>
	
<?php		
$no=1;

while($var=mysql_fetch_array($query)){
$mata_kuliah=mysql_fetch_array(mysql_query("SELECT mata_kuliah FROM matakuliah WHERE kd_matakuliah='$var[kd_matakuliah]'"));
	
echo "<tr>
<td>$no</td>
<td><center>$var[nama_kelas]</td>
<td><center>$var[mata_kuliah]</td>
<td>$var[nama_dosen]</td>
<td><center><a href='admin.php?page=lihatsiswa&kd_kelas=$var[kd_kelas]'>Lihat Siswa</a></center></td>
<td><center><a href='admin.php?page=formeditkelas&kd_kelas=$var[kd_kelas]'>Edit</a></center></td>
<td><center><a href='deletekelas.php?kd_kelas=$var[kd_kelas]'>Delete</a></td>

</tr>";
$no++;
}?>
		</table>
				
		</p>
  </div>
</div>


