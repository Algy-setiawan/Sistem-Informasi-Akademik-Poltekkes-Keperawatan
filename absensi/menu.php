
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
<body>
<ul>
	<li>
		<h2>MENU UTAMA</h2>
		<ul>
			<a href="?page=dosen" class="push_button">Koordinator</a> <br>
			<a href="?page=matakuliah" class="push_button">Mata Kuliah</a><br>
			<a href="?page=kelas" class="push_button">Kelas</a><br>
			<a href="siswa.php" class="push_button">Mahasiswa</a><br>
			<a href="?page=absensi" class="push_button">Absensi</a>
			
		</ul>
	</li>
</ul>
</body>
</html>