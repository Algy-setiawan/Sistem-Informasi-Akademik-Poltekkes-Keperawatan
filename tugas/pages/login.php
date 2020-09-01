<!DOCTYPE html>
<html lang="en">

<body>
<div class="container skills">
  <h2 align="center">Form Login</h2>


    <form class="form" action="cek_login.php" method="post">
		<?php 
			//kode php ini kita gunakan untuk menampilkan pesan eror
			if (!empty($_GET['error'])) {
				if ($_GET['error'] == 1) {
					echo '<h3 class="error">Username dan Password belum diisi!</h3>';
				} else if ($_GET['error'] == 2) {
					echo '<h3 class="error">Username belum diisi!</h3>';
				} else if ($_GET['error'] == 3) {
					echo '<h3 class="error">Password belum diisi!</h3>';
				} else if ($_GET['error'] == 4) {
					echo '<h3  class="error">Username dan Password tidak terdaftar!</h3>';
				}
			}
		?>
	
      <p class="field" align="center" style="padding: 5px 100px;">
        <input type="text" name="username" placeholder="Username" required/>
      </p>

      <p class="field" align="center" style="padding: 5px 100px;">
        <input type="password" name="password" placeholder="Password" required/>
        <label>
        <input type="submit" name="commit" value="Login" class="btn btn-large">
        </label>
      </p>

    
    </form></div>

<script src="js/jquery-1.10.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$('#myModal').modal('hidden')
</script>
</body>
</html>