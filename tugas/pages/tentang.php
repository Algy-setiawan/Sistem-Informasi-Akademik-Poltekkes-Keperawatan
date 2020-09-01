<!DOCTYPE html>
<html lang="en">

<body>
<div class="container resume">
<h2>Halaman Pengumuman</h2>
<h5>
<?php
				include('conn.php');
				$sql = mysql_query("SELECT * FROM pengumuman ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						
							
							|<span class="style4">'.$data['tanggal_upload'].' |
							<span class="style4">'.$data['nama_dosen'].'	|<br>
							
							<table><tr><td width="1000"><span class="style4">'.$data['pengumuman'].'</td></tr></table>
						<br><hr>
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
				?></h5>
				
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
