<?php
include "session_mhs.php";
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
  <h2>Lihat Tugas</h2>
  <div class="entry">
				
		
		<center><table class="table table-striped" align="center">
		<tr>
                	<th  width="22"><span class="style4">No.</span></th>
                    <th width="70"><span class="style4">Tgl Upload</span></th>
					 <th width="158"><span class="style4">Nama Dosen</span></th>
					 <th width="175"><span class="style4">Mata Kuliah</span></th>
                    <th width="223"><span class="style4">Nama Tugas</span></th>
                    <th width="70"><span class="style4">Ukuran</span></th>
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
							<td><span class="style4"><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td><span class="style4">'.formatBytes($data['ukuran_file']).'</td>
							
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
