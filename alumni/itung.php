<?php
$koneksi=mysql_connect("localhost","root");
$database=mysql_select_db("jurwat");
?>

  <html >
<head>
<title>: Paging :</title>
<style type="text/css">
.tbl {
 border-top:solid 1px #000;
 border-bottom:solid 1px #000;
}
</style>
</head>
<body>
<b><h2>:: PAGING DI PHP ::</h2></b>
 <table width="212" border="0" class="tbl">
    <tr bgcolor="#CCCCCC">
      <td width="32">No</td>
      <td width="170">Nama</td>
	   <td width="170">Nama</td>
      </tr>
      <?php
  
  /* Pengaturan Paging */
  $per_page=5; /* Jumlah Data yang ditampilkan Setiap Page*/
  $page_query=mysql_query("select COUNT(*) from alumni");
  $pages = ceil(mysql_result($page_query, 0) / $per_page);
  $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
  $start = ($page - 1) * $per_page;
 /*------------------*/
  $sql=mysql_query("select * from alumni Limit $start, $per_page");
  while($data=mysql_fetch_array($sql)){
 ?>
 
    <tr class="trr">
	<td><?php echo $c=$c+1;?></td>
      <td class="td"><?php echo $data['nim'];?></td>
      <td class="td"><?php echo $data['nama']?></td>
      
    </tr>
    <?php
 }
 ?>
  </table>
  <?php
 /* Link Paging */
 if($pages >= 1 && $page <= $pages){
     for($x=1; $x<=$pages; $x++){
        echo ($x == $page) ?  
    '<a href="?page='.$x.'">'.$x.'</a>' : '<a  href="?page='.$x.'">'.$x.'</a>' ; 
     }
 }
 ?>  
   

</body>
</html>