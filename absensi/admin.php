
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
			<li><a href="?page=home" class="style3">Home</a></li>
				<li><a href="?page=visidanmisi" class="style3">Visi Dan Misi</a></li>
				
				<li><a href="?page=Jurnal" class="style3">Jurnal<img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				
				<ul style="left:219px">
				<li><a href="?page=upload" class="style3">Upload</a></li>
				  </ul>
				  
				<li><a href="?page=absensi" class="style3">Absensi</a></li>
				
				<li><a href="?page=rekap_absensi" class="style3">Laporan <img src="images/010-Down-128.png" alt="" width="15" height="15"/></a>
				<ul style="left:439px">
				<li><a href="?page=Laporan" class="style3">Cetak Laporan</a></li>
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

	<!-- end #header-wrapper -->
	<div id="page">
	<div id="content">
		<?php include "isi.php";?>
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
		<p>© 2016 Absensi Online. All Rights Reserved | by   <a href="http://algysetiawan.xyz">  Madness Studio</a></p>
	</div>
	<!-- end #footer -->
</body>
</html>
