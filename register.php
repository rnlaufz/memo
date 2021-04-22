<!-- PHP Block -->
<?php

// Start session
session_start();

// Connection string
$connectQuery = mysqli_connect("localhost", "root", "", "memo");
// Check DB connection
if(mysqli_connect_errno()){
  echo "Failed to connect to database" + mysqli_connect_errno();
};

// Declare form variables
$name = '';
$email = '';
$passwordOne = '';
$passwordTwo = ''; 
$date = ''; // date of register
$errorArray = array(); // array for errors
$messageArray = array(); // array for messages



if(isset($_POST['registerButton'])){
  // Registration form values
  // Remove html tags and whitespaces
  $name = strip_tags($_POST['regName']);
  $name = str_replace(' ', '', $name); 
  $name = ucfirst(strtolower($name)); // Uppercase the first letter

  $email = strip_tags($_POST['regEmail']);
  $email = str_replace(' ', '', $email);

  $passwordOne = strip_tags($_POST['regPasswordOne']);
  $passwordTwo = strip_tags($_POST['regPasswordTwo']);

  $date = date("Y-m-d"); //Assign date

  // Session variables
  $_SESSION['regName'] = $name;
  $_SESSION['regEmail'] = $email;  

   // Check if email is valid
   if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      $email = filter_var($email, FILTER_VALIDATE_EMAIL);

      // Check if email already exists
      $email_check = mysqli_query($connectQuery, "SELECT email FROM users WHERE email = '$email'");

      // Count number of rows returned
      $num_rows = mysqli_num_rows($email_check);
      if($num_rows > 0){
        array_push($errorArray,"Email already exists");
      };
   };

  // Check if passwods match 
  if($passwordOne == $passwordTwo){
   
    if(preg_match('/^(?=.{8,})(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$/', $passwordOne)){
    
    } else {
      array_push($errorArray,'Password must have at least one uppercase letter, one lowercase letter, number and a special character'); 
    }
  } else {
    array_push($errorArray,"Passwords do not match");
  }

  if(empty($errorArray)){
    // Password encryption
    $salt = 'ksjbuiu5nik3445fm!fcHFRDCW^I*VFRNSW$';
    $saltPassword = $salt.$passwordOne;
    $passwordOne = md5($saltPassword);

    $query = mysqli_query($connectQuery, "INSERT INTO users VALUES('', '$name', '$email', '$passwordOne', '$date', '0')");

    // Clear sessions
    $_SESSION['regName'] = '';
    $_SESSION['regEmail'] = ''; 

    // Show success message
    array_push($messageArray, "Registration successfull. You may sign in now.");
  }
}
?>

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
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
  </div> 

  <script src="app.js"></script> 
</body>
</html>