<!--

Author: W3layouts

Author URL: http://w3layouts.com

License: Creative Commons Attribution 3.0 Unported

License URL: http://creativecommons.org/licenses/by/3.0/

-->

<?php

include("cek_session.php");

?>

<!DOCTYPE html>

<html>

<head>

<title>Alumni Jurwat Bandung</title>

<link rel="shortcut icon" href="logo/poltekkes.png"/>

<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="js/jquery.min.js"></script>

<!-- Custom Theme files -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Custom Theme files -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Literacy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 

Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- for bootstrap working -->

	<script type="text/javascript" src="js/bootstrap.js"></script>

<!-- //for bootstrap working -->

<script src="js/responsiveslides.min.js"></script>

<script>

    // You can also use "$(window).load(function() {"

    $(function () {

      // Slideshow 1

      $("#slider1").responsiveSlides({

         auto: true,

		 nav: true,

		 speed: 500,

		 namespace: "callbacks",

      });

    });

  </script>

  <!-- web-fonts -->

  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600italic,400italic,600,300italic,300,700italic,800,800italic' rel='stylesheet' type='text/css'>

	<!-- web-fonts -->

<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>

<!--/script-->

<script type="text/javascript">

			jQuery(document).ready(function($) {

				$(".scroll").click(function(event){		

					event.preventDefault();

					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);

				});

			});

</script>

</head>

<body>

	<!-- header-section-starts-here -->

	<div class="header">

		<div class="container">

			<div class="header-top">

				<p><img src="logo/poltekkes.png" width="120" height="120"></p>

				<div class="logo">

					<h1><a href="index.html">Data Alumni </a></h1>

				</div>

				<div class="social-icons">

					<ul>

						<li><a class="facebook" href="#"></a></li>

						<li><a class="twitter" href="#"></a></li>

						<li><a class="google-plus" href="#"></a></li>

					</ul>

				</div>

				<div class="clearfix"></div>

			</div>

			<!-- navigation -->

			<div class="navigation">

					<nav class="navbar navbar-default">

					 

						<!-- Brand and toggle get grouped for better mobile display -->

						<div class="navbar-header">

						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

							<span class="sr-only">Toggle navigation</span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

							<span class="icon-bar"></span>

						  </button>

						</div>



						<!-- Collect the nav links, forms, and other content for toggling -->

						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">

							  <ul class="nav navbar-nav">

								<li><a href="logout.php">Logout<span class="sr-only">(current)</span></a></li>

								<li class="active"><a href="data_alumni.php">Form Data Alumni</a></li>

								

							  </ul>

						  <div class="clearfix"></div>

						</div><!-- /.navbar-collapse -->

					</nav>

			</div>

			<!-- //navigation -->

		</div>



	</div>

	<!-- header-section-ends-here -->

	<!-- content-section-starts-here -->

	<div class="content">

		<div class="about-section">

			<div class="about">

				<div class="container">

					<div class="about-top heading">

						<h2 class="heading text-center">Form Data Alumni</h2>

						

					</div>

					<div class="entry">



		

		<form action="?page=data_alumni" method="post">

		<center><table>

		<br>

		<tr>

			<td>Nama</td>

			<td>

			  <input type="text" size="20" name="nama"  / required></td>

		

			<tr>

			<td>Jk</td>

			<td><br><label>

		<select name="jk" required>
  <option value="">Jenis Kelamin</option>
  <option value="Laki-Laki">Laki-Laki</option>
  <option value="Perempuan">Perempuan</option>
  
</select>

			</label>

			<p>&nbsp;</p></td>

		<tr>

			<td>Alamat</td>

			<td>

			  <label>

			  <textarea name="alamat" required></textarea>

			  </label>

			  </td>

		</tr>

		<tr>

			<td>No Tlp/Email</td>

			<td><br><input type="text" size="20" name="no_tlp" required /><p>&nbsp;</p></td>

		</tr>

		<tr>

			<td>Thn Lulus</td>

			<td><label>

					<select name="thn_lulus" required>
  <option value="">Thn Lulus</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>
  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>
  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>
  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>
  <option value="2017">2017</option>
  <option value="2018">2018</option>
  <option value="2019">2019</option>
  <option value="2020">2020</option>
  
</select>

			</label>

			</td>

		</tr>



<tr>

			<td>Pekerjaan</td>

			<td><br><input type="text" size="20" name="pekerjaan" required /><p>&nbsp;</p></td>

		</tr>

		<tr>

			<td>Alamat Pekerjaan</td>

			<td>

			  <label>

			  <textarea name="alamat_kerja" required></textarea>

			  </label>

			  <p>&nbsp;</p></td>

		</tr>





			<td></td><td><input type="submit" value="Simpan" />&nbsp;&nbsp;

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

		if(isset($_POST['nama'])){

			$nim=strtoupper($_POST['nim']);

			$nama=$_POST['nama'];

			$jk=$_POST['jk'];

			$alamat=$_POST['alamat'];

			$no_tlp=$_POST['no_tlp'];

			$thn_lulus=$_POST['thn_lulus'];

			$pekerjaan=$_POST['pekerjaan'];

			$alamat_kerja=$_POST['alamat_kerja'];

			

			$query=mysql_query("insert into alumni(nim , nama, jk, alamat, no_tlp, thn_lulus, pekerjaan, alamat_kerja) values('$nim' , '$nama', '$jk', '$alamat', '$no_tlp', '$thn_lulus', '$pekerjaan', '$alamat_kerja')" ,$koneksi);

			

			if($query){

				echo "<br>";

				echo "Berhasil Silahkan Lihat Di Form Alumni";

			}else{

				echo "gagal";

				echo mysql_error();

			} 

		}else{

			unset($_POST['nama']);

		}

	?>

						

					<div class="clearfix"></div>

				</div>

				</div>

			</div>

		</div>

		<!-- //Our-staff-ends -->

		</div>

	</div>

	<!-- //content-section-ends-here -->

	<!-- footer-section-starts-here -->

	<!-- footer-section -->

	<div class="footer">

		<div class="footer-top">

			<div class="container">

				<div class="col-md-4 footer-grid">

					<h5>&nbsp;</h5>

					<form>					 

					  <input type="text" class="text" value="Enter Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Enter Email';}">

					 <input type="submit" value="Submit">

					 <div class="clearfix"></div>

				 </form>

				</div>

			  <div class="col-md-4 footer-grid">

				  <h5>&nbsp;</h5>

					<p>&nbsp;</p>

				</div>

				<div class="col-md-4 footer-grid">

					<h5>&nbsp;</h5>

					<div class="social-icons footer-social-icons">

				<a class="facebook" href="#"></a>

				<a class="twitter" href="#"></a>

				<a class="google-plus" href="#"></a>

			</div>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

		<div class="footer-bottom">

			<div class="container">

				<div class="copyrights text-center">

					<p>© 2016 Alumni. All Rights Reserved | by   <a href="http://algysetiawan.xyz">  Madness Studio</a></p>					

				</div>

				<div class="footer-nav">

					<ul>

						<li><a href="index.html">Home <span class="sr-only">(current)</span></a></li>

						<li><a href="about.html">ABOUT</a></li>

						<li><a href="typography.html">Short codes</a></li>

						<li><a href="gallery.html">GALLERY</a></li>

						<li><a href="blog.html">Blog</a></li>

						<li><a href="contact.html">Contact Us</a></li>

					</ul>

				</div>

				<div class="clearfix"></div>

			</div>

		</div>

	</div>

	<!-- //footer-section -->

	<!-- //footer-section-ends-here -->

	<script type="text/javascript">

		$(document).ready(function() {

				/*

				var defaults = {

				containerID: 'toTop', // fading element id

				containerHoverID: 'toTopHover', // fading element hover id

				scrollSpeed: 1200,

				easingType: 'linear' 

				};

				*/

		$().UItoTop({ easingType: 'easeOutQuart' });

});

</script>

<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!---->

</body>

</html>