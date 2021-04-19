<!-- PHP Block -->
<?php?>

<!-- HTML Block -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="question.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>MEMO | Register</title>
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
  <form action="">
  <h3>MEMO | Sign Up</h3>
  <div class="inputs">
  <div class="form-control">
  <input name="regName" type="text" placeholder="Name">
  </div>
 
  <div class="form-control">
  <input name="regEmail" type="email" placeholder="Email">
  </div>
  
  <div class="form-control">
  <input name="regPasswordOne" type="password" placeholder="Password">
  </div>
  
  <div class="form-control">
  <input name="regPasswordTwo" type="password" placeholder="Confirm Password">
  </div>
  
  <div class="form-control">
  <input name="signUp" type="submit" value="Submit">
  </div>
  </div>
 <p>Already have an account? 
 <br>
 <a href="#">Sign In</a></p> 
  </form>
  </div>
  <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
  </div>  
</body>
</html>