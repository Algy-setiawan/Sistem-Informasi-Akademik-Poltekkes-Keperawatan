
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
<?php

include"conn.php";
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
<link href="absen.css" rel="stylesheet" type="text/css" media="screen" />

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
			<li><a href="admin.php?page=home" class="style3">Home</a></li>
				<li><a href="admin.php?page=visidanmisi" class="style3">Visi Dan Misi</a></li>
				
				<li><a href="admin.php?page=Jurnal" class="style3">Jurnal<img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				
				<ul style="left:219px">
				<li><a href="admin.php?page=upload" class="style3">Upload</a></li>
				  </ul>
				  
				<li><a href="admin.php?page=absensi" class="style3">Absensi</a></li>
				
				<li><a href="admin.php?page=rekap_absensi" class="style3">Laporan <img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				<ul style="left:439px">
				<li><a href="admin.php?page=Laporan" class="style3">Cetak Laporan</a></li>
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
	

</div>
<?php include ("cek_session.php")
?>
<br><br><br><br><br><center>
<div class="post">
	<h2 class="title"><a href="#">Halaman Mahasiswa</a></h2>
	<p class="meta"><em>

</body>
</html>
	</em></p>
  <div class="entry">
		<p>
		<form name="siswa" action="editsiswa.php" method="post">
<?php 
include "conn.php";
$kd_siswa=$_GET['kd_siswa'];
$query=mysql_query("select * from siswa where kd_siswa='$kd_siswa'");
?>
<html><head><title>Halaman Edit Data Kelas</title><head><body>
<form action="editkelas.php" method="post">
<table border="0">
<?php
while($row=mysql_fetch_array($query)){
?>
<input type="Hidden" name="no" value="<?php echo $no;?>" />
<h2>Edit Data Mahasiswa</h2>
<form action="" method="POST">
<table>
<tr>
<td></td>
<td> 
  <input type="hidden" name="kd_siswa" value="<?php echo $row['kd_siswa'];?>" size="10" ></td>
</tr>
<tr>
<td>Nim</td>
<td>: <input type="text" name="NIM" value="<?php echo $row['NIM'];?>"size="20"></td>
</tr>
<tr>
<td>Nama</td>
<td>: <input type="text" name="nama" value="<?php echo $row['nama'];?>"size="30"></td>
</tr>
	 
		   <tr>
			<td>L/P</td>
			  <td>: <select name="jk">
                <option value="<?php echo $row['jk'];?>"><?php echo $row['jk'];?></option>
                <option>L</option>
                <option>P</option>
              </select></td>
			</tr>
	

<tr>
			<td>Semester</td>
			  <td>: <select name="smt">
                <option value="<?php echo $row['smt'];?>"><?php echo $row['smt'];?></option>
                <option>Ganjil</option>
                <option>Genap</option>
              </select></td>
			</tr>

	<tr>
			<td>kelas1</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas" >
          <option value="<?php echo $row['kd_kelas'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas2</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas2" >
          <option value="<?php echo $row['kd_kelas2'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas3</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas3" >
          <option value="<?php echo $row['kd_kelas3'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas4</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas4" >
          <option value="<?php echo $row['kd_kelas4'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas5</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas5" >
          <option value="<?php echo $row['kd_kelas5'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas6</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas6" >
          <option value="<?php echo $row['kd_kelas6'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas7</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas7" >
          <option value="<?php echo $row['kd_kelas7'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select></td>
	</tr>	
	<tr>
			<td>kelas8</td>
	        <td>: 
	  <?php 
			include "conn.php";
			
			$query=mysql_query("select nama_kelas from kelas order by nama_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
	    <select name="kd_kelas8" >
          <option value="<?php echo $row['kd_kelas8'];?>" selected="selected">Kelas/Matkul</option>
          <?php 
			include "conn.php";
			
			$query=mysql_query("select * from kelas order by kd_kelas asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
          <option value="<?php  echo $var['kd_kelas']; ?>">
          <?php  echo $var['nama_kelas']; ?>
          </option>
          <?php 
			}}
			?>
        </select>
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
		<div id="sidebar">
		
		 <div class = "container">

		<?php
include("cek_session.php");
?>
<html>
<head>
<style>
.push_button{
	position:relative;
	width:150px;
	color:#FFF;
	display:block;
	text-decoration:none;
	margin:0 auto;
	border-radius:5px;
	border:solid 1px #C13100;
	background:#FF9900;
	text-align:center;
	padding:20px 30px;
	
	-webkit-transition: all 0.1s;
	-moz-transition: all 0.1s;
	transition: all 0.1s;
	
	-webkit-box-shadow: 0px 9px 0px #84261a;
        -moz-box-shadow: 0px 9px 0px #84261a;
        box-shadow: 0px 9px 0px #C13100;
}
.push_button:active{
    -webkit-box-shadow: 0px 2px 0px #84261a;
    -moz-box-shadow: 0px 2px 0px #84261a;
    box-shadow: 0px 2px 0px #84261a;
    position:relative;
    top:7px;
}</style>
</head>

</body>
</html>
		</div></div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
		
	</div>
	<!-- end #page -->
	<div id="footer">
		<p>© 2016 Absensi Online. All Rights Reserved | by   <a href="http://algysetiawan.xyz">  Madness Studio</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>

<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

