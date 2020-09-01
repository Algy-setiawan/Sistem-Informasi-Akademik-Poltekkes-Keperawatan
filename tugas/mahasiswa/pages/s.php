<?php
include "session_mhs.php";
?>
<?php
error_reporting(0);
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
  <center><h2>Upload Tugas</h2>
					<div class="entry">

<?php
			include('config.php');
			if($_POST['upload']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				$nama_dosen			= $_POST['nama_dosen'];
				$mata_kuliah			= $_POST['mata_kuliah'];
				$kelas			= $_POST['kelas'];
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 104407000){
						$lokasi = 'files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("INSERT INTO download VALUES(NULL, '$nama_dosen', '$kelas', '$mata_kuliah',  '$tgl',  '$nama', '$file_ext', '$file_size', '$lokasi')");
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
            
            <p><br> 
            <form action="" method="post" enctype="multipart/form-data">
            <table width="50%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0" >
			<tr>
                	<td width="40%" align="center" ><b>Nama Dosen</b></td><td></td><td><input type="text" name="nama_dosen" size="40" style="padding: 5px 10px;" required /></td>
              </tr>
				<tr>
                	<td width="40%" align="center"><b>Mata Kuliah</b></td><td></td><td><input type="text" name="mata_kuliah" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
				<tr>
                	<td width="40%" align="center"><b>Kelas</b></td><td></td><td><input type="text" name="kelas" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
            	<tr>
                	<td width="40%" align="center"><b>Nama File</b></td><td></td><td><input type="text" name="nama" size="40" style="padding: 5px 10px;" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="center"><b>Pilih File</b></td><td></td><td><input type="file" name="file" style="padding: 5px 10px;" required /></td>
                </tr>
                <tr>
                	<td>&nbsp;</td><td>&nbsp;</td><td><input type="submit" name="upload" value="Upload" class="btn btn-large" /></td>
                </tr>
            </table>
			</form>
				<center><center><p>&nbsp;</p><tr><table class="table table-striped" align="center">
		<tr>
                	<th width="25" ><span class="style4">No.</th>
                    <th width="115"><span class="style4">Tgl. Upload</th>
					 <th width="233"><span class="style4">Nama Dosen</th>
					 <th width="233"><span class="style4">Mata Kuliah</th>
					 <th width="233"><span class="style4">Kelas</th>
                    <th width="193"><span class="style4"> Nama File</th>
                    <th width="227"><span class="style4">Tipe</th>
                    <th width="245"><span class="style4">Ukuran</th>
					<th width="122"><span class="style4">Delete</th>
					
            </tr>
		
            </table>
			
            
		
		
						
					<div class="clearfix"></div>
				</div>
				</div>
			</div>
		</div></div></div>

<div class="footer">
  <div class="container">
    <p class="pull-left"><a href="http://dzyngiri.com">www.dzyngiri.com</a></p>
    <p class="pull-right"><a href="#myModal" role="button" data-toggle="modal"> <i class="icon-mail"></i> CONTACT</a></p>
  </div>
</div>
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel"><i class="icon-mail"></i> Contact Me</h3>
  </div>
  <div class="modal-body">
    <form action="#">
      <input type="text" placeholder="Yopur Name">
      <input type="text" placeholder="Your Email">
      <input type="text" placeholder="Website (Optional)">
      <textarea rows="3" style="width:80%"></textarea>
      <br>
      <button type="submit" class="btn btn-large"><i class="icon-paper-plane"></i> SUBMIT</button>
    </form>
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
