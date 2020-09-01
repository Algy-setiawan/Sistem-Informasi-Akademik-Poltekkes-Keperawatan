<?php include ("cek_session.php")
?>
<?php 
	include "conn.php";
	$kd_kelas=$_GET['kd_kelas'];
	$query=mysql_fetch_array(mysql_query("select * from kelas where kd_kelas='$kd_kelas'"));
?>
<div class="post">
	<h2 class="title"><a href="#">MAHASISWA KELAS <?php echo $query['nama_kelas'];?></a></h2>
	<p class="meta">&nbsp;</p>
	<div class="entry">
		<p>
		<form action="?page=proses" method="post" name="postform">
		<input type="hidden" value="<?php echo $query['kd_kelas'];?>" name="kd_kelas"/>
		<table class="datatable">
         
          <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>L/P</th>
            <th>Smt</th>
            <th>tgl lahir</th>
            <th>Alamat</th>
          </tr>
          <?php
		//penting nech buat kasih nilai awal cekbox
		$no=0;
		
		$query=mysql_query("select * from siswa where kd_kelas2='$kd_kelas' or kd_kelas='$kd_kelas' or kd_kelas3='$kd_kelas' or kd_kelas4='$kd_kelas' or kd_kelas5='$kd_kelas' or kd_kelas6='$kd_kelas' or kd_kelas7='$kd_kelas'or kd_kelas8='$kd_kelas' order by nama asc , NIM asc");
		while($row=mysql_fetch_array($query)){
		
		?>
          <tr>
            <td><?php echo $c=$c+1;?></td>
            <td><?php echo $row['NIM'];?></td>
            <td><?php echo $row['nama'];?></td>
            <td><?php echo $row['jk'];?></td>
            <td><?php echo $row['smt'];?></td>
            <td><?php echo $row['tgl_lahir'];?></td>
            <td><?php echo $row['alamat'];?></td>
           
          </tr>
          <?php
		}
		
		echo "
			<tr>
			
			</tr>";
		?>
        </table>
		<br />
		<br />
		<br />
		</form>
		</p>
  </div>
</div>

<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
