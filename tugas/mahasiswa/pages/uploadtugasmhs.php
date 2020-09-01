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
<center><h2>Upload Tugas Mahasiswa</h2>

<div class="entry">

<?php
			include('conn.php');
			if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				$nama_mahasiswa			= $_POST['nama_mahasiswa'];
				$nim			= $_POST['nim'];
				$mata_kuliah			= $_POST['mata_kuliah'];
				$kelas			= $_POST['kelas'];
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 99999999){
						$lokasi = '../files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO downloadm VALUES(NULL, '$nama_mahasiswa', '$nim',  '$kelas', '$mata_kuliah', '$tgl',  '$nama', '$file_ext', '$file_size', '$lokasi')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>
            
            <p>
            <form action="" method="post" enctype="multipart/form-data">
            <table width="50%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0" >
			<tr>
                	<td width="40%" align="right" ><b>Nama</b></td><td></td><td><input type="text" name="nama_mahasiswa" size="40" style="padding: 5px 10px;" required /></td>
              </tr>
				<tr>
                	<td width="40%" align="right"><b>Nim</b></td><td></td><td><input type="text" name="nim" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="right"><b>Mata Kuliah</b></td><td></td><td><select name="mata_kuliah" size="0" style="padding: 5px 10px;" required>
              <option value="<?php echo $row['mata_kuliah'];?>" selected="selected" >Mata Kuliah</option>
              <?php 
			include "conn.php";
			
			$query=mysql_query("select * from download order by mata_kuliah asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
              <option value="<?php  echo $var['mata_kuliah']; ?>">
			  
              <?php  echo $var['mata_kuliah']; ?>
			  <?php  echo $var['kelas']; ?>
              </option>
              <?php 
			}
			?></td>
                </tr>
            	<tr>
                	<td width="40%" align="right"><b>Kelas</b></td><td></td>
                	<td><select name="kelas" size="0" style="padding: 5px 10px;" required>
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
                	<td width="40%" align="right"><b>Nama Tugas</b></td><td></td><td><input type="text" name="nama" class="" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Pilih File</b></td><td></td><td><input type="file" name="file" class="" required /></td>
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
		
		
						
					<div class="clearfix"></div>
				</div>
<div class="entry">
				
		
		<center><table class="table table-striped" align="center">
		<tr>
                	<th width="1" class="style4">No.</th>
                    <th width="125" class="style4">Tgl. Upload</th>
					 <th width="267" class="style4">Nama Mahasiswa</th>
					 <th width="267" class="style4">Nim</th>
					 <th width="207" class="style4">Mata Kuliah</th>
					 <th width="267" class="style4">Kelas</th>
                    <th width="106" class="style4">Nama Tugas</th>
					
          </tr>
                <?php
				include('config.php');
				$sql = mysql_query("SELECT * FROM downloadm ORDER BY nim , mata_kuliah asc");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center"><span class="style4">'.$no.'</td>
							<td><span class="style4">'.$data['tanggal_upload'].'</td>
							<td><span class="style4">'.$data['nama_mahasiswa'].'</td>
							<td><span class="style4">'.$data['nim'].'</td>
							<td><span class="style4">'.$data['mata_kuliah'].'</td>
							<td><span class="style4">'.$data['kelas'].'</td>
							<td align="center"><span class="style4">'.$data['nama_file'].'</a></td>
							
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
