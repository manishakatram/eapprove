<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>E-Approve Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

  <div class="header">
    <img src="logo.png">
  </div>

  <form method="post" action="login.php">
    <h2>Login</h2>
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>


  <img class = "octo" src="octo_logo.jpg">
  <img class = "uscis" src="uscis_logo.png">

</body>
</html>

<!-- http://codewithawa.com/posts/admin-and-user-login-in-php-and-mysql-database -->
