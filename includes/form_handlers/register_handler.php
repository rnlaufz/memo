<?php

// Declare form variables
$name = '';
$email = '';
$passwordOne = '';
$passwordTwo = ''; 
$userKey = '';
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
      $email_check = mysqli_query($connectQuery, "SELECT email FROM memousers WHERE email = '$email'");

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

    // Generate user identifier
    function generateKey($length = 90) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomKey = '';
        for ($i = 0; $i < $length; $i++) {
            $randomKey .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomKey;
    }

   $userKey = generateKey();

    $query = mysqli_query($connectQuery, "INSERT INTO memousers VALUES('', '$userKey','$name', '$email', '$passwordOne', '0', '$date')");

    // Clear sessions
    $_SESSION['regName'] = '';
    $_SESSION['regEmail'] = ''; 

    // Show success message
    array_push($messageArray, "Registration successfull.");
    header("Location: dashboard.php");
  }
}

?>