<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>
<div class="login-box">
  <h2>Login</h2>
  <h4 class="errMessage">
    <?php 
    error_reporting(0);
    session_start();
    session_destroy();
    echo $_SESSION['loginMessage'];
    ?>
  </h4>
  <form action="login_check.php" method="POST">
    <div class="user-box">
      <input type="text" name="username">
      <label>Username</label>
    </div>
    <div class="user-box">
      <input type="password" name="password">
      <label>Password</label>
    </div>
    <div>
		<input class="btn" type="submit" name="submit" value="Login">
	</div>
  </form>
</div>
</body>
