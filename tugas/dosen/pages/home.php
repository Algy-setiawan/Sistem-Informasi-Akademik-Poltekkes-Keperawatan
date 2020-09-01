<?php
include "session_dosen.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mini Portfolio | Resume</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script src="js/responsiveslides.min.js"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font/css/fontello.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<style type="text/css">
<!--
.style4 {color: #355267}
-->
</style>
</head>
<body>
<div class="container resume">
  <h2>Halaman Upload Dosen</h2>
  <h3>Untuk Menambahkan Pengumuman silahkan isi disini</h3>
<form action="pengumuman.php" method="post" enctype="multipart/form-data">
            <table width="50%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0" >
			<tr>
                	<td width="40%" align="center" ><b>Nama Dosen</b></td><td></td><td><input type="text" name="nama_dosen" size="40" style="padding: 5px 10px;" required /></td>
              </tr>
				<tr>
                	<td width="40%" align="center"><b>PENGUMUMAN</b></td><td></td>
                	<td><label>
                	  <textarea name="pengumuman" required></textarea>
                	</label></td>
				</tr>
				
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" class="btn btn-large" />
                	  <input type="reset" name="reset" value="Reset" class="btn btn-large" /></td>
                </tr>
				<tr>
                	<td>&nbsp;</td><td>&nbsp;</td>
                	<td>&nbsp;</td>
				</tr>
            </table>
  </form>
  <div class="entry">
				
		
		<center><table class="table table-striped" align="center">
		<tr>
                	<th width="1" class="style4">No.</th>
                    <th width="125" class="style4">Tgl Upload</th>
					 <th width="300" class="style4">Nama Dosen</th>
					 <th width="300" class="style4">pengumuman</th>
					<th width="1" class="style4">Delete</th>
          </tr>
                <?php
				include('config.php');
				$sql = mysql_query("SELECT * FROM pengumuman ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center"><span class="style4">'.$no.'</td>
							<td><span class="style4">'.$data['tanggal_upload'].'</td>
							<td><span class="style4">'.$data['nama_dosen'].'</td>
							<td width="1000"><span class="style4">'.$data['pengumuman'].'</td>
							<td><span class="btn"><a href="deletep.php?id='.$data['id'].'">delete</a></td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table>
</div>

					<div class="clearfix"></div>
  </div>
				</div>
			</div>
		</div>



<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>