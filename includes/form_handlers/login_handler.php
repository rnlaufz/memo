<?php

// Declare form variables
$email = '';
$password = '';
$errorArray = array(); // array for errors
$messageArray = array(); // array for messa

if(isset($_POST['signIn'])){
// Login form values
// Remove html tags and whitespaces
  $email = strip_tags($_POST['logEmail']);
  $email = str_replace(' ', '', $email);
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);


// Session variables
  $_SESSION['logEmail'] = $email;  

  $password = strip_tags($_POST['logPassword']);
  $salt = 'ksjbuiu5nik3445fm!fcHFRDCW^I*VFRNSW$';
  $saltPassword = $salt.$password;
  $password = md5($saltPassword);

  $checkDBQuery = mysqli_query($connectQuery, "SELECT * FROM memousers WHERE email='$email' AND password='$password'");
  $checkLoginQuery = mysqli_num_rows($checkDBQuery);
  if($checkLoginQuery == 1){
      $row = mysqli_fetch_array($checkDBQuery);

    //   Store user id
      $_SESSION['user_identifier'] = $userKey;
      header('Location: dashboard.php');
      exit();
  } else {
    array_push($errorArray, "Wrong password or email");
  }

 
}
?>