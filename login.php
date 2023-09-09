<?php session_start(); $_SESSION['userid'] = null;?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style/login.css">
</head>
<body>
  <div class="container">
    <form action="check_user.php" method='post'>
      <h2>Login</h2>
      <div class="form-group">
        <label for="username">Email:</label>
        <input type="text" id="username" name="email" required>
        <label style='color:red;' ><?php if(isset($_GET['email1'])) echo"$_GET[email1]"; else echo "";?></label>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label style='color:red;' ><?php if(isset($_GET['pass1'])) echo"$_GET[pass1]"; else echo "";?></label>
      </div>
      <div class="form-group">
        <button type="submit" name='log'>Login</button>
        <a href="singup.php" style='text-decoration: none;  background-color: #45a049;  color: white;padding: 7px;'>Signup</a>
      </div>
    </form>
  </div>
</body>
</html>