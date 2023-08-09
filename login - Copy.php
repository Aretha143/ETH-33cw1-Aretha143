<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Aretha's Gaming Login Portal</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    body {
      background-image: url('flame.jpg');
      background-size: cover;
      background-position: center;
      background-color: #f0f0f0;
      color: #fff;
    }
    .header {
      padding: 20px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="header">
  </div>
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username">
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
</body>
</html>
