<!-- PHP Block -->
<?php
require 'config/config.php';
require "includes/header.php";
require 'includes/form_handlers/add_card_handler.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="styles/img/question.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>MEMO | New card</title>
</head>
<body>
    <div class="new-card-container">
       <!-- Navigation -->
       <div class="nav-container">
    <div>
    <p class="logo">New Card</p>
    </div>
    <div>
  <ul>
  <li><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
  <li><a href="settings.php"><i class="fas fa-cog"></i></a></li>
  <li><a href="includes/handlers/logout.php" ><i class="fas fa-sign-out-alt"></i></a></li>
  </ul>
</div>
  </div>
   <!-- Show errors if any -->
   <?php
    if(in_array("Please add question and answer.", $errorArray)) echo "<span class='error'>Please add question and answer. <br></span>";
  ?>

  <!-- Main content -->
  <div class="form-container">
  <form action="newCard.php" method="POST">
  <div class="inputs new-card-fix">
  <div class="form-control">
  <input name="question" type="text" placeholder="Question" required
  value="<?php
    if(isset($_SESSION['question'])){
      echo $_SESSION['question'];
    }
  ?>" 
  >
  </div>
  <div class="form-control">
  <input name="answer" type="text" placeholder="Answer" required
  value="<?php
    if(isset($_SESSION['answer'])){
      echo $_SESSION['answer'];
    }
  ?>" 
  >
  </div>
  <div class="form-control">
  <input name="addCard" type="submit" value="Add">
  </div>
  </div>
  </form>
  </div>
 <!-- Footer -->
 <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
  </div>
    </div>

    <!-- Import font awesome -->
    <script src="https://kit.fontawesome.com/415bbac1bd.js" crossorigin="anonymous"></script>
</body>
</html>