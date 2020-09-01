<?php
include "session_dosen.php";
?>
<?php
include "conn.php"; // menghubungkan ke file koneksi.php agar terhubung dengan database
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
  <h2>Tugas Mahasiswa</h2>

<div class="entry">
  <form action="" method="post" enctype="multipart/form-data">				
	<td width="40%" align="center"></td><td></td><td><select name="input_cari" size="0" style="padding: 5px 10px;" required>
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
   <input type="submit" name="cari" value="Filter" class="btn" style="padding:12px;"    />
  </form>				
		
		<center><table class="table table-striped" align="center">
		<tr>
                	
                    <th width="125" class="style4">Tgl. Upload</th>
					 <th width="267" class="style4">Nama Mahasiswa</th>
					 <th width="267" class="style4">Nim</th>
					 <th width="207" class="style4">Mata Kuliah</th>
					 <th width="267" class="style4">Kelas</th>
                    <th width="106" class="style4">Nama File</th>
					<th width="1" class="style4">Delete</th>
          
		  
  </tr>
   <?php 

   $input_cari = @$_POST['input_cari']; 
   $cari = @$_POST['cari'];

   // jika tombol cari di klik
   if($cari) {

    // jika kotak pencarian tidak sama dengan kosong
    if($input_cari != "") {
    // query mysql untuk mencari berdasarkan nama negara. .
    $sql = mysql_query("select * from downloadm where kelas like '%$input_cari%'") or die (mysql_error());   
    } else {
    $sql = mysql_query("select * from downloadm order by nim asc") or die (mysql_error());
    }
    } else {
    $sql = mysql_query("select * from downloadm order by nim asc") or die (mysql_error());
    }

   // mengecek data
   $cek = mysql_num_rows($sql);
   // jika data kurang dari 1
   if($cek < 1) {
    ?>
     <tr> <!--muncul peringata bahwa data tidak di temukan-->
      <td colspan="7" align="center style="padding:10px;""> Data Tidak Ditemukan</td>
     </tr>
    <?php
   } else {

   // mengulangi data agar tidak hanya 1 yang tampil
   while($data = mysql_fetch_array($sql)) {
echo '
						<tr bgcolor="#fff">
							
							<td><span class="style4">'.$data['tanggal_upload'].'</td>
							<td><span class="style4">'.$data['nama_mahasiswa'].'</td>
							<td><span class="style4">'.$data['nim'].'</td>
							<td><span class="style4">'.$data['mata_kuliah'].'</td>
							<td><span class="style4">'.$data['kelas'].'</td>
							<td><span class="style4"><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td><span class="btn"><a href="deletemhs.php?id='.$data['id'].'">delete</a></td>
							
						</tr>
						
					';
					
				}
				
   ?>
   <tr>
 
    
    <!--Hanya pemanis tampilan-->
   
    </td>
   </tr>
  <?php 

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
