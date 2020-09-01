<?php include ("cek_session.php")
?> 
<div class="post">
	<h2 class="title"><a href="#">Halaman Download</a></h2>
	<p class="meta"><em>	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?></a></em></p>
  
		<p>
        
        <div id="content">
        	
            <p>Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>
            
            <p>
            <table class="table" width="100%" cellpadding="3" cellspacing="0">
            	<tr>
                	<th width="30">No.</th>
                    <th width="80">Tgl. Upload</th>
                    <th width="30">Nama File</th>
                    <th width="70">Tipe</th>
                    <th width="70">Ukuran</th>
					<th width="5">Delete</th>
                </tr>
                <?php
				include('config_upload.php');
				$sql = mysql_query("SELECT * FROM download ORDER BY id DESC");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$no.'</td>
						
							<td align="center">'.$data['tanggal_upload'].'</td>
							<td algn="center"><a href="'.$data['file'].'">'.$data['nama_file'].'</a></td>
							<td align="center">'.$data['tipe_file'].'</td>
							<td align="center">'.formatBytes($data['ukuran_file']).'</td>
							
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
        </div>
    </div>

</body>
</html>