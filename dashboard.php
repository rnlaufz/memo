<?php
require "includes/header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="styles/img/question.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>MEMO | Dashboard</title>
</head>
<body>
<div class="dashboard-container">
    <!-- Navigation -->
    <div class="nav-container">
    <div>
    <p class="logo">Hi <span class="name">Name</span>! Up for a quiz?</p>
    </div>
    <div>
  <ul>
  <li><a  href="newCard.php"><i class="fas fa-plus"></i></a></li>
  <li><a  href="settings.php"><i class="fas fa-cog"></i></a></li>
  <li><a href="includes/handlers/logout.php" ><i class="fas fa-sign-out-alt"></i></a></li>
  </ul>
</div>
  </div>
<!-- Main content -->
<div class="card-container">
    <div class="card">
        <!-- Flip button -->
        <div class="flip"><button><i class="fas fa-redo-alt"></i></button></div>
        <!-- Card content -->
        <!-- Tempo hardcode -->
        <p>Question?</p>
    </div>


<div class="card-navigation"> 
<div class="num-cards">1 of 10</div>
<div class="num-arrows">
<div id="prev"><i class="fas fa-arrow-left"></i></div>
<div id="next"><i class="fas fa-arrow-right"></i></div>
</div>
</div> 
</div>
<!-- Footer -->
  <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
</div>

 <!-- Import Font Awesome -->
 <script src="https://kit.fontawesome.com/415bbac1bd.js" crossorigin="anonymous"></script>
</body>
</html>