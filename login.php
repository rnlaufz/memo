<!-- PHP Block -->
<?php
require 'config/config.php';
require 'includes/form_handlers/login_handler.php';
?>

<!-- HTML Block -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="styles/img/question.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>MEMO | Login</title>
</head>
<body>
  <div class="auth-container">
  <div class="nav-container">
    <div>
    <p class="logo">MEMO</p>
    </div>
    <div>
  <ul>
  <li><a href="login.php">Sign In</a></li>
  <li><a href="register.php">Sign Up</a></li>
  </ul>
</div>
  </div>
  <div class="form-container">
  <form action="login.php" method="POST">
  <h3>MEMO | Sign In</h3>
  <div class="inputs">
 
 
  <div class="form-control">
  <input name="logEmail" type="email" placeholder="Email">
  </div>
  
  <div class="form-control">
  <input name="logPassword" type="password" placeholder="Password">
  </div>
  
 
  
  <div class="form-control">
  <input name="signIn" type="submit" value="Submit">
  </div>
  </div>
 <p>Do not have an account? 
 <br>
 <a href="register.php">Sign Up</a></p> 
  </form>
  </div>
  <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
  </div>  
</body>
</html>