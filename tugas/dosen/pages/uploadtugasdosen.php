<?php
include "session_dosen.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Mini Portfolio | Work</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="font/css/fontello.css" rel="stylesheet">
<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen">
<style type="text/css">
<!--
.style4 {color: #355267}
-->
</style>
</head>
<body>
<div class="container work">
<center><h2>Upload Tugas Dosen</h2>

<form action="up.php" method="post" enctype="multipart/form-data">
            <table width="50%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0" >
			<tr>
                	<td width="40%" align="center" ><b>Nama Dosen</b></td><td></td><td><input type="text" name="nama_dosen" size="40" style="padding: 5px 10px;" required /></td>
              </tr>
				<tr>
                	<td width="40%" align="center"><b>Mata Kuliah</b></td><td></td><td><input type="text" name="mata_kuliah" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="center"><b>Kelas</b></td><td></td><td><select name="kelas" size="0" style="padding: 5px 10px;" required>
  <option value="">Kelas</option>
  <option value="1-A">1-A</option>
  <option value="1-B">1-B</option>
  <option value="1-C">1-C</option>
  <option value="2-A">2-A</option>
  <option value="2-B">2-B</option>
  <option value="2-C">2-C</option>
  <option value="3-A">3-A</option>
  <option value="3-B">3-B</option>
  <option value="3-C">3-C</option>
  
</select></td>
                </tr>
            	<tr>
                	<td width="40%" align="center"><b>Nama File</b></td><td></td><td><input type="text" name="nama" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="center"><b>Pilih File</b></td><td></td><td><input type="file" name="file" class="" required /></td>
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
					 <th width="300" class="style4">Mata Kuliah</th>
					 <th width="25" class="style4">Kelas</th>
                    <th width="300" class="style4"> Nama File</th>
                  
					<th width="1" class="style4">Delete</th>
          </tr>
                <?php
				include('config.php');
				$sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center"><span class="style4">'.$no.'</td>
							<td><span class="style4">'.$data['tanggal_upload'].'</td>
							<td><span class="style4">'.$data['nama_dosen'].'</td>
							<td><span class="style4">'.$data['mata_kuliah'].'</td>
								<td><span class="style4">'.$data['kelas'].'</td>
							<td><span class="style4"><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							
							<td><span class="btn"><a href="delete.php?id='.$data['id'].'">delete</a></td>
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
			
			</p>	
					<div class="clearfix"></div>
  </div>
				</div>
			</div>
		</div>

</div>
			
<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#myModal').modal('hidden')
</script>
<script src="js/jquery.fancybox.js?v=2.1.5"></script>
<script>
$(document).ready(function () {
    $(".fancybox-thumb").fancybox({
        helpers: {
            title: {
                type: 'inside'
            },
            overlay: {
                css: {
                    'background': 'rgba(1,1,1,0.65)'
                }
            }
        }
    });
});
</script>
</body>
</html>
