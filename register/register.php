<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>

  <body>

    <div class="header">
      <h2>Register</h2>
    </div>

    <from metod="post" action="register.php">

      <div class="input-group">
        <lebel>Username</lebel>
        <input type="text" name="username">
      </div>

      <div class="input-group">
        <lebel>Email</lebel>
        <input type="text" name="email">
      </div>

      <div class="input-group">
        <lebel>Password</lebel>
        <input type="password" name="password_1">
      </div>

      <div class="input-group">
        <lebel>Confirm Password</lebel>
        <input type="password" name="password_2">
      </div>

      <div class="input-group">
        <lebel>Register</lebel>
        <button type="submit" name="register" class="btn">Register</button>
      </div>

      <p>
        Already a member?  <a href="login.php">Sign in</a>
      </p>

    </from>

  </body>
</html>
