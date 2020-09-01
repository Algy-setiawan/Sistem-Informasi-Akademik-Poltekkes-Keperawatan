
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Solutions 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20091102

-->
<?php
include("cek_session.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
* {margin:0; padding:0;}
 
body {
	
	font-family:Arial, Helvetica, sans-serif;
	color:#c13100;
}
 
.menu-wrap {
	
	height:35px; 
	line-height:35px; 
	position:relative;
	width:1050px;
	margin:auto;
	margin-top:20px;
}
 
.menu-wrap ul {
	list-style:none;
}
 
.menu-wrap ul li a {
	float:left; 
	width:110px;
	 
	display:block; 
	text-align:center; 
	color:#fffbd0; 
	text-decoration:none; 
	text-transform:uppercase;
	
}
 
.menu-wrap ul li a:hover {
	background-color:#ff9900;
	height:35px; 
	display:block;
}
 
.menu-wrap ul li:hover ul {
	display:block;
}
 
.menu-wrap ul ul {
	display:none; 
	list-style:none; 
	position:absolute; 
	background-color:#c13100;
		
		
	top:35px; 
	width:133px;

}


 
.menu-wrap ul ul li a {
	float:none; 
	display:block; 
	padding-left:5px; 
	text-align:left; 
	width:133px;
	
}
 
.menu-wrap ul ul li a:hover {
	color:#c13100;;
	
}
</style>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Absensi Online</title>
<link rel="shortcut icon" href="logo/poltekkes.png"/>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<style type="text/css">
<!--
.style3 {font-size: 14px}
-->
</style>
</head>
<body>

<div id="logo">
<img src="logo/poltekkes.png" alt="" width="100" height="100" align="left" />
			<h1><a href="#">&nbsp ABSENSI ONLINE </a></h1>
			<h2><a href="#">&nbsp&nbsp  Politeknik Kesehatan Keperawatan</a></h2>
			
<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="GO" />
				</fieldset>
			</form>
  </div>
            <p>&nbsp;</p>
</div>
	<hr />
	<!-- end #logo -->
	
	
		 <div class="menu-wrap">
			<ul>
			<li><a href="" class="style3">Home</a></li>
				<li><a href="" class="style3">Visi Dan Misi</a></li>
				
				<li><a href="" class="style3">Jurnal<img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				
				<ul style="left:219px">
				<li><a href="" class="style3">Upload</a></li>
				  </ul>
				  
				<li><a href="" class="style3">Absensi</a></li>
				
				<li><a href="" class="style3">Laporan <img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				<ul style="left:439px">
				<li><a href="" class="style3">Cetak Laporan</a></li>
				  </ul>

			  <align "center">
			  
				<li><a href="logout.php" class="style3" onclick="return confirm('Apakah Anda yakin?')">Logout</a></li>
		<li><a href="#"></a></li>
			</ul>
		</div>
		
		<!-- end #menu -->
		
		<!-- end #search -->
	</div>
	<!-- end #header -->
	<div id="header-wrapper">
	
	<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="5" direction="left"  align="center">
	<h1><em><p>Penting !!!! Cara Penggunaan Silahkan Download Di Halaman Jurnal
</marquee>
</div>

	<!-- end #header-wrapper -->
	<div id="page">
	<div id="content">
		<?php include ("cek_session.php")
?>
<?php

include"conn.php";
?>
<div class="post">
	<h2 class="title"><a href="#">Halaman Mahasiswa</a></h2>
	<link rel="styleshet" href="bootstrap.min.css"/>
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
		

		
		<form name="siswa" action="" method="post">
		<table>
		<tr>
			<td>Nim</td><td><input type="text" size="20" name="NIM" /></td>
		</tr>
		<tr>
			<td>Nama</td><td><input type="text" size="20" name="nama" /></td>
		</tr>
<tr>
			<td>L/P</td>
			  <td><select name="jk">
                <option value="#Masukan Data">L/P</option>
                <option>L</option>
                <option>P</option>
              </select></td>
		  </tr>
		<tr>
			<td>Semester</td>
			  <td><select name="smt">
                <option value="#Masukan Data">Semester</option>
                <option>Ganjil</option>
                <option>Genap</option>
              </select></td>
		  </tr>
		
		<tr>
			<td>Kelas1</td>
			<td><select name="kelas1">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
			<td>Kelas2</td>
			<td><select name="kelas2">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas3</td>
			<td><select name="kelas3">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas4</td>
			<td><select name="kelas4">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas5</td>
			<td><select name="kelas5">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas6</td>
			<td><select name="kelas6">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas7</td>
			<td><select name="kelas7">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
		<td>Kelas8</td>
			<td><select name="kelas8">
              <option value="<?php echo $row['nama_Kelas'];?>" selected="selected">Kelas/Matkul</option>
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
			<td></td><td><input type="submit" value="Simpan" />
			  <input name="reset" type="reset" value="Reset" /></td>
		</tr>
		</table>
		</form>
		
		<?php 
		//untuk input
		if(isset($_POST['nama'])){
			$nim=ucwords($_POST['NIM']);
			$nama=ucwords($_POST['nama']);
			$jk=$_POST['jk'];
			$smt=$_POST['smt'];
			$tgl=$_POST['tgl'];
			$alamat=$_POST['alamat'];
			$kd_kelas1=$_POST['kelas1'];
			$kd_kelas2=$_POST['kelas2'];
			$kd_kelas3=$_POST['kelas3'];
			$kd_kelas4=$_POST['kelas4'];
			$kd_kelas5=$_POST['kelas5'];
			$kd_kelas6=$_POST['kelas6'];
			$kd_kelas7=$_POST['kelas7'];
			$kd_kelas8=$_POST['kelas8'];
			
			$query=mysql_query("insert into siswa(NIM, nama, jk, smt, tgl_lahir, alamat, kd_kelas, kd_kelas2, kd_kelas3, kd_kelas4, kd_kelas5, kd_kelas6, kd_kelas7, kd_kelas8) values('$nim','$nama','$jk','$smt','$tgl','$alamat','$kd_kelas1','$kd_kelas2','$kd_kelas3','$kd_kelas4','$kd_kelas5','$kd_kelas6','$kd_kelas7','$kd_kelas8')",$koneksi);
			
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
			?>
		
	
		
		

		
	
		<p>
		<center><table class="datatable"><tr bgcolor= #FF9900 >
<td width="40"><b><center>No</td>
<td width="46"><b><center>Nim</td>
<td><b><center>Nama</td>
<td width="42"><b><center>L/P</td>
<td width="24"><b><center>Smt</td>
<td width="59"><b><center>kelas1</td>
<td width="59"><b><center>kelas2</td>
<td width="59"><b><center>kelas3</td>
<td width="59"><b><center>kelas4</td>
<td width="59"><b><center>kelas5</td>
<td width="59"><b><center>kelas6</td>
<td width="59"><b><center>kelas7</td>
<td width="59"><b><center>kelas8</td>
<td width="44"><b><center>Edit</td>
<td width="59"><b><center>Delete</td>
</tr>		  
	
		
<?php
/* Pengaturan Paging */
  $per_page=20; /* Jumlah Data yang ditampilkan Setiap Page*/
  $page_query=mysql_query("select COUNT(*) from siswa");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);
  $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
  $start = ($page - 1) * $per_page; 
 /*------------------*/
 
 
include "conn.php";	
$nama_kls=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas]'"));
$query=mysql_query("select * from siswa order by kd_kelas asc , nama asc Limit $start, $per_page");
while($var=mysql_fetch_array($query)){
$nama_kls=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas]'"));
$nama_kls2=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas2]'"));
$nama_kls3=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas3]'"));
$nama_kls4=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas4]'"));
$nama_kls5=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas5]'"));
$nama_kls6=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas6]'"));
$nama_kls7=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas7]'"));
$nama_kls8=mysql_fetch_array(mysql_query("SELECT nama_kelas FROM kelas WHERE kd_kelas='$var[kd_kelas8]'"));
?>
<tr>
<td><?php echo $c=$c+1;?></td>
<td><?php echo $var['NIM'];?></td>
<td><?php echo $var['nama'];?></td>
<td><?php echo $var['jk'];?></td>
<td><?php echo $var['smt'];?></td>
<td><?php echo $nama_kls['nama_kelas'];?></td>
<td><?php echo $nama_kls2['nama_kelas'];?></td>
<td><?php echo $nama_kls3['nama_kelas'];?></td>
<td><?php echo $nama_kls4['nama_kelas'];?></td>
<td><?php echo $nama_kls5['nama_kelas'];?></td>
<td><?php echo $nama_kls6['nama_kelas'];?></td>
<td><?php echo $nama_kls7['nama_kelas'];?></td>
<td><?php echo $nama_kls8['nama_kelas'];?></td>
<td><center><a href='formeditsiswa.php?kd_siswa=<?php echo $var['kd_siswa'] ; ?>'>Edit</a></center></td>
<td><center><a href='deletesiswa.php?kd_siswa=<?php echo $var['kd_siswa'] ; ?>'onclick='return confirm('Apakah Anda yakin?')'>Delete</a></td>

</tr>
<?php
}?>

		</table>
  <?php
 /* Link Paging */
 if($pages >= 1 && $page <= $pages){
     for($x=1; $x<=$pages; $x++){
        echo ($x == $page) ?  
    '<a href="?page='.$x.'">'.$x.'</a>' : '<a  href="?page='.$x.'">'.$x.'</a>' ; 
     }
 }
 ?> 
		</p>
  </div>
</div>
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>


	  </div>
		<!-- end #content -->
		
		<div id="sidebar">
		
		 <div class = "container">

		<?php include "menu.php";?>
		</div></div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
		
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>Copyright (c) 2016 Madness Studio All rights reserved.</p>
	</div>
	<!-- end #footer -->
</body>
</html>
