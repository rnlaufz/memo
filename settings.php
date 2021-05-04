<?php
require 'config/config.php';
require "includes/header.php";
require 'includes/handlers/deleteData.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="styles/img/question.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>MEMO | Settings</title>
</head>
<body>
   <div class="settings-container">
      <!-- Navigation -->
      <div class="nav-container">
    <div>
    <p class="logo">Settings</p>
    </div>
    <div>
  <ul>
  <li><a href="newCard.php"><i class="fas fa-plus"></i></a></li>
  <li><a href="dashboard.php"><i class="fas fa-home"></i></a></li>
  <li><a href="includes/handlers/logout.php" ><i class="fas fa-sign-out-alt"></i></a></li>
  </ul>
</div>
  </div>
  <!-- Main content -->
   </div>
    <div class="actions-container">
    <div class="action-buttons">
    <button class="toggle delCards">Delete Cards</button>
    <button class="toggle delAccount">Delete Account</button>
    </div>
    <!-- Delete cards -->
    <div class="hide confirm-delete-cards">
    <form action="settings.php"  method="POST">
    <label for="delCards">Are you sure you want to delete all your cards?</label>
    <input name="delCards" type="submit" value="Delete Cards">
    </form>
    </div>
    <!-- Delete account -->
    <div class="hide confirm-delete-account">
    <form action="settings.php"  method="POST">
    <label for="delAcc">Are you sure you want to delete your account?</label>
    <input name="delAcc" type="submit" value="Delete Account">
    </form>
    </div>

    <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
    </div>

    </div>

    <!-- Import font awesome -->
    <script src="https://kit.fontawesome.com/415bbac1bd.js" crossorigin="anonymous"></script>     
     <!-- Import Messages & errors -->
     <script src="scripts/messages.js"></script>
     <!-- Import settings ui script -->
     <script src="scripts/toggle.js"></script>
</body>
</html>