<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Regisztráció PHP és MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Bejelentkezés</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Felhasználónév</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Jelszó</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Bejelentkezés</button>
  	</div>
  	<p>
  		Még nem járt itt? <a href="register.php">Regisztráljon</a>
  	</p>
  </form>
</body>
</html>