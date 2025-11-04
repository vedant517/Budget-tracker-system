<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration and Login - PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <!-- Registration Section -->
  <div class="header">
    <h2>Register</h2>
  </div>
        
  <form method="post" action="register.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" value="<?php echo isset($username) ? $username : ''; ?>">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="#login">Sign in below</a>
    </p>
  </form>

  <!-- Login Section -->
  <div class="header" id="login">
    <h2>Login</h2>
  </div>
         
  <form method="post" action="server.php">
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
      Not yet a member? <a href="#register">Register above</a>
    </p>
  </form>
</body>
</html>