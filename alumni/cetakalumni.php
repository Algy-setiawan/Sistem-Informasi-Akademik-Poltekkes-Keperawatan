<style type="text/css">
<!--
.style1 {color: #000000}
-->
</style>
<div class="post">
<table width="1094" height="132" border="1" style="border-collapse:collapse">
      <tr>
        <td width="198" rowspan="2" align="center"><img src="logo/logo.png" width="120" height="110" align="center"></td>
        <td width="500" align="center"><H4 class="title">POLITEKNIK KESEHATAN KEMENKES BANDUNG </h4></td>
        <td width="159" rowspan="2" align="center"><img src="logo/kanan.png" width="120" height="110" align="center"></td>
      </tr>
      <tr>
        <td><center>
        <h4 class="title"> ALUMNI JURUSAN KEPERAWATAN BANDUNG</h4></td>
      </tr><br>
    </table>

	
	
	<p class="meta"><?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>
	</p>
<?php 
		include "conn.php";	
		$query=mysql_query("select * from alumni order by thn_lulus asc, nama asc");?>
<table style="border-collapse:collapse;background:#FFFFFF" border="1" bordercolor="#000000" >
		<tr>
  
  <td style="background:#999999"><b><center>No</td>
      <td style="background:#999999"><b>
<center>Nama</td>
    
    <td style="background:#999999"><b>
        <center>
      Jenis Kelamin</td>
    <td style="background:#999999"><center>
        <b>Alamat</td>
    <td style="background:#999999"><center>
        <b>No Tlp/Email</td>
    <td style="background:#999999"><b>
        <center>
      Tahun Lulus</td>
    <td style="background:#999999"><b>
        <center>
      Pekerjaan</td>
    <td style="background:#999999"><b>
        <center>
      Alamat Kerja</td>
    </tr>
  <?php		
$no=1;
while($var=mysql_fetch_array($query)){
	
echo "<tr>
<td>$no</td>
<td>$var[nama]</td>

<td><center>$var[jk]</td>
<td>$var[alamat]</td>
<td>$var[no_tlp]</td>
<td><center>$var[thn_lulus]</td>
<td>$var[pekerjaan]</td>
<td>$var[alamat_kerja]</td>
</td>

</tr>";
$no++;
}?>
</table>
<br>
<img src="images/11.png" width="50" height="50" onclick="cetak()" >
		
<script type="text/javascript">
function cetak(){
 print();
}
</script>