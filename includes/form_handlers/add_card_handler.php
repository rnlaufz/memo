<?php
// Declare form variables
$question = '';
$answer = '';
$userKey ='';
$errorArray = array(); // array for errors
$messageArray = array(); // array for messages



if(isset($_POST['addCard'])){
  // Registration form values
  // Remove html tags and whitespaces
  $question = strip_tags($_POST['question']);
  $question = trim($question);
  $question = ucfirst(strtolower($question)); // Uppercase the first letter

  $answer = strip_tags($_POST['answer']);
  $answer = trim($answer);
  $answer = ucfirst(strtolower($answer)); // Uppercase the first letter

  // Session variables
  $_SESSION['question'] = $question;
  $_SESSION['answer'] = $answer;  

    if($question == '' || $answer == ''){
        array_push($errorArray,"Please add question and answer.");
    }

  if(empty($errorArray)){
    

    echo $_SESSION['user_identifier'];

    // $query = mysqli_query($connectQuery, "INSERT INTO memousers VALUES('', '$userKey','$name', '$email', '$passwordOne', '0', '$date')");

    // // Clear sessions
    // $_SESSION['regName'] = '';
    // $_SESSION['regEmail'] = ''; 

    // // Show success message
    // array_push($messageArray, "Registration successfull.");
    // header("Location: dashboard.php");
  }
}

?>