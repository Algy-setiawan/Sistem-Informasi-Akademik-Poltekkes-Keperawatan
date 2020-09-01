
<div class="post">
	<h2 class="title"><a href="#">Halaman Siswa</a></h2>
	<p class="meta"><em>
	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>
</body>
</html>
	</em></p>
	<div class="entry">
		<p>
		

		
		<form name="siswa" action="?page=siswa" method="post">
		<table>
		<tr>
			<td>Nim</td><td><input type="text" size="20" name="NIM" /></td>
		</tr>
		<tr>
			<td>Nama</td><td><input type="text" size="20" name="nama" /></td>
		</tr>
		<tr>
			<td>Semester</td><td><select name="smt">
			  <option value="0">Semester</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
              <?php 
			}
			?>
                                                </select></td>
		</tr>
		<tr>
			<td>Tgl Lahir</td><td><input type="text" size="20" name="tgl" title="dd-mm-yyyy" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.siswa.tgl);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
		</tr>
		<tr>
			<td>Alamat</td><td><textarea cols="20" vars="5" name="alamat"></textarea></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><select name="kelas">
              <option value="0" selected="selected">Pilih Kelas</option>
              <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
			  <option value="<?php  echo $var['kd_kelas']; ?>">
			    <?php  echo $var['nama_kelas']; ?>
		      </option>
			  <?php 
			}
			?>
            </select></td>
		</tr>
		<tr>
			<td></td><td><input type="submit" value="Simpan" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		//untuk input
		if(isset($_POST['nama'])){
			$nim=ucwords($_POST['NIM']);
			$nama=ucwords($_POST['nama']);
			$smt=$_POST['smt'];
			$tgl=$_POST['tgl'];
			$alamat=$_POST['alamat'];
			$kd_kelas=$_POST['kelas'];
			
			
			$query=mysql_query("insert into siswa(NIM, nama, smt, tgl_lahir, alamat, kd_kelas) values('$nim','$nama','$smt','$tgl','$alamat','$kd_kelas')",$koneksi);
			
			if($query){
				echo "<br>";
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} 
		}else{
			unset($_POST['nama']);
		}
		
		//untuk menampilkan
		$view=mysql_query("select * from siswa order by kd_kelas asc");
		?>
		<br />
		<table class="datatable">
		<tr>
		  <th width="20">No</th>
		  <th width="25">Nim</th>
		  <th width="100">Nama</th>
		  <th width="20">Semester</th>
		  <th width="50">Tgl Lahir</th>
		  <th width="48">Alamat</th>
		  <th width="52">Kelas</th>
		  <th width="52">Edit/Delete</th>
		</tr>
		  
		<?php
		$no=1;
		while($var=mysql_fetch_array($view)){
		$nama_kls=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas]'"));	
		?>
		
		<tr>
		  <td><?php echo $c=$c+1;?></td>
		  <td><?php echo $var['NIM'];?></td>
		  <td><?php echo $var['nama'];?></td>
		  <td><?php echo $var['smt'];?></td>
		  <td><?php echo $var['tgl_lahir'];?></td>
		<td><?php echo $var['alamat'];?></td>
		<td><?php echo $nama_kls['nama_kelas'];?></td>
		<td><center><a href="admin.php?page=formedit");">Edit</a></a>
	<td><center><a href='deletesiswa.php?kd_siswa='$var[kd_siswa]'>Delete</a></td>
		
		</tr>
		
		<?php
		}
		?>
		</table>
		
		</p>
	</div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>