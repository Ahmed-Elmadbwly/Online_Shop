<!DOCTYPE html>
<html>
<head>
  <title>Registration Page</title>
  <link rel="stylesheet" type="text/css" href="style/singup.css">
</head>
<body>
  <div class="container">
    <form action="check_user.php" method='post'>
      <h2>Registration</h2> 
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label style='color:red;' ><?php if(isset($_GET['email'])) echo"$_GET[email]"; else echo "";?></label>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label style='color:red;'><?php if(isset($_GET['pass'])) echo"$_GET[pass]"; else echo "";?></label>
      </div>
      <div class="form-group">
        <label for="confirm-password">Confirm Password:</label>
        <input type="password" id="confirm-password" name="confirm-password" required>
        <label style='color:red;' ><?php if(isset($_GET['conpass'])) echo"$_GET[conpass]"; else echo "";?></label>
      </div>
      <div class="form-group">
        <button type="submit" name='reg'>Register</button> 
        <a href="login.php" style='text-decoration: none;  background-color: #45a049;  color: white;padding: 7px;'>Login</a>
      </div>
    </form>
  </div>
</body>
</html>