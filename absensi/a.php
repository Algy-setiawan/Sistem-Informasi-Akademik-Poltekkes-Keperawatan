
<div class="post">
	<h2 class="title"><a href="#">Halaman Siswa</a></h2>
	<p class="meta"><em>
	<?php
	date_default_timezone_set("Asia/Bangkok");
echo date("l jS \of F Y h:i:s A") . "<br>";
?>
</body>
</html>
	</em></p>
  <div class="entry">
		<p>
		

		
		<form name="siswa" action="?page=siswa" method="post">
		<table>
		
		
		
		
		<tr>
			<td>Tgl Lahir</td><td><input type="text" size="20" name="tgl" title="dd-mm-yyyy" /><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.siswa.tgl);return false;" ><img name="popcal" align="absmiddle" src="calender/calbtn.gif" width="34" height="22" border="0" alt=""></a></td>
		</tr>
		
		
		
		<tr>
			<td></td><td><input type="submit" value="Simpan" /></td>
		</tr>
		
		</table>
		</form>
		

				
		</p>
  	</div>
</div>
<iframe width=174 height=189 name="gToday:normal:calender/normal.js" id="gToday:normal:calender/normal.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

