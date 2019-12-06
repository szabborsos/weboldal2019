<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Regisztráció PHP és MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Regisztráció</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Felhasználónév</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Jelszó</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Jelszó megerősítése</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Regisztráció</button>
  	</div>
  	<p>
  		Már járt nálunk? <a href="login.php">Belépés</a>
  	</p>
  </form>
</body>
</html>