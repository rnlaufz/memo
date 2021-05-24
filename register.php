<!-- PHP Block -->
<?php
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
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
    <title>MEMO | Register</title>
</head>
<body>
  <div class="auth-container">
  <!-- Navigation -->
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
  <!-- Show errors if any -->
  <?php
    if(in_array("Email already exists", $errorArray)) echo "<span class='error'>Email already exists <br></span>";
    if(in_array("Password must have at least one uppercase letter, one lowercase letter, number and a special character", $errorArray)) echo "<span class='error'>Password must have at least one uppercase letter, one lowercase letter, number and a special character <br></span>";
    if(in_array("Passwords do not match", $errorArray)) echo "<span class='error'>Passwords do not match <br></span>";
    if(in_array("Registration successfull. You may sign in now.", $messageArray)) echo "<span class='message'>Registration successfull. You may sign in now.<br></span>";
  ?>
  <!-- Form -->
  <div class="form-container">
  <form action="register.php" method="POST">
  <h3>MEMO | Sign Up</h3>
  <div class="inputs">
  <div class="form-control">
  <input name="regName" type="text" placeholder="Name" 
  value="<?php
    if(isset($_SESSION['regName'])){
      echo $_SESSION['regName'];
    }
  ?>" 
  required>
  </div>
  <div class="form-control">
  <input name="regEmail" type="email" placeholder="Email"
  value="<?php
    if(isset($_SESSION['regEmail'])){
      echo $_SESSION['regEmail'];
    }
  ?>" 
   required>
  </div>
  <div class="form-control">
  <input name="regPasswordOne" type="password" placeholder="Password" required>
  </div>
  <div class="form-control">
  <input name="regPasswordTwo" type="password" placeholder="Confirm Password" required>
  </div>
  <div class="form-control">
  <input name="registerButton" type="submit" value="Submit">
  </div>
  </div>
 <p>Already have an account? 
 <br>
 <a href="login.php">Sign In</a></p> 
  </form>
  </div>
  <!-- Footer -->
  <div class="footer-container">
  <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ |  Icons made by <a href="https://www.flaticon.com/authors/vaadin" title="Vaadin">Vaadin</a> from <a href="https://www.flaticon.com/" title="Flaticon">Flaticon</a> and <a href="https://fontawesome.com/">Font Awesome</a></p>
    </div>
  </div> 
  <script src="scripts/messages.js"></script> 
</body>
</html>