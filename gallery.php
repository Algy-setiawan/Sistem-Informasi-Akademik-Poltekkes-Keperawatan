<!DOCTYPE html>
<html>
<head>
<title>Politeknik Kesehatan - Keperawatan Bandung</title>
<link rel="shortcut icon" href="img/poltekkes.png"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Combatant Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Jura:400,300,500,600' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>

<!-- body-top -->
	<div class="body-top">
		<div class="container">
		</div>
	</div>
<!-- //body-top -->
<!-- body-content -->
	<div class="body-content">
		<div class="container">
			<!-- header -->
				<div class="logo-search">
				  <div class="logo">
						<h1><a href="index.html"><img src="img/poltekkes.png" alt="" width="80" height="80" border="0" align="left">POLITEKNIK KESEHATAN<i>&nbsp;KEPERAWATAN BANDUNG</i></a></h1>
				  </div>
					<div class="search">
						<form>
							<input type="text" value="Search Here..." onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search Here...';}" required="">
							<input type="submit" value=" " >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //header -->
			<!-- nav -->
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
							<nav class="cl-effect-20" id="cl-effect-20">
								<ul class="nav navbar-nav">
									<li ><a href="index.html"><span data-hover="Home">Home</span></a></li>
									<li><a href="profile.html"><span data-hover="Profile">Profile</span></a></li>
									<li class="active"><a href="gallery.php"><span data-hover="Gallery">Gallery</span></a></li>
									<li><a href="http://tugas.jurwatbandung.com/"><span data-hover="Tugas">Tugas</span></a></li>
									<li><a href="http://alumni.jurwatbandung.com/"><span data-hover="Alumni">Alumni</span></a></li>
									<li><a href="mail.html"><span data-hover="Contact Us">Contact Us</span></a></li>
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
				</div>
			<!-- //nav -->
			<!-- banner -->
				<div class="banner">
					<div class="wmuSlider example1">
						<div class="wmuSliderWrapper">
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner1">
										
									</div>
								</div>
							</article>
							<article style="position: absolute; width: 100%; opacity: 0;"> 
								<div class="banner-wrap">
									<div class="banner2">
										
									</div>
								</div>
							</article>
						
						</div>
					</div>
							<script src="js/jquery.wmuSlider.js"></script> 
							<script>
								$('.example1').wmuSlider();         
							</script> 

				</div>
			<!-- //banner -->
		</div>
	</div>
<!-- //body-content -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="gallery-grids">
				<h3><span>Photo Gallery</span>Gallery</h3>
				<?php
include('conn.php')
	?>
	<table>
		<tr>
		<?php
		$i = 1;
		while($row = mysql_fetch_array($result)){
		?>
		<td width="10" align="left">
				<a href="upload/<?php echo $row['nama_file'];?>" class="b-link-stripe b-animate-go  swipebox">
				<img src="upload/<?php echo $row['nama_file'];?>" alt="" width="370" height="230" border="0"/><br>
				</a>
				<br/>
				
			</td><?php
			if($i % 3 == 0){
				echo '</tr><tr>';
			}
			$i++;
		}
		?>
				</tr>
	</table>

	
			</div>
			</div>
			</div>
					<div class="clearfix"></div>
				</div>
				<!-- script-for-swipebox -->
					<link rel="stylesheet" href="css/swipebox.css">
					<script src="js/jquery.swipebox.min.js"></script> 
						<script type="text/javascript">
							jQuery(function($) {
								$(".swipebox").swipebox();
							});
						</script>
				<!-- //script-for-swipebox -->
			</div>
		</div>
	</div>
<!-- //gallery -->
<!-- footer -->
	<div class="footer">
		<div class="container">
		  <div class="footer-grid-logo">
				<h2><a href="index.html"><span></span>POLITEKNIK KESEHATAN<i>&nbsp;KEPERAWATAN BANDUNG</i></a></h2>
				<p>JL. Dr. Otten No. 32, Cicendo, Kota bandung</p>
				<div class="social">
					<ul>
						<li><a href="http://jurwatbandung.com/">Home |</a></li>
						<li><a href="gallery.php">Gallery |</a></li>
						<li><a href="http://tugas.jurwatbandung.com/">Tugas Online |</a></li>
						<li><a href="http://alumni.jurwatbandung.com/">Alumni |</a></li>
						<li><a href="http://absensi.jurwatbandung.com/">Absensi Online</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-copy">
		<div class="container">
			<p> <a href="http://algysetiawan.web.id/">Copyright ©2017 All rights Reserved | by Madness Studio.</a></p>
		</div>
	</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
</body>
</html>