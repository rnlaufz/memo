<?php
require 'config/config.php';
require "includes/header.php";
require 'includes/handlers/getCards.php';
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
    <p class="logo">Hi <span class="name"><?php echo $userName;?></span>! Up for a quiz?</p>
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
        <div class="flip"><button id="flip" name="flip"><i class="fas fa-redo-alt"></i></button></div>

        <!-- Card content -->
        <!-- Tempo hardcode -->
        <p id="cardText"><?php echo $question; ?></p>
    </div>


<div class="card-navigation"> 
<div class="num-cards">
<!-- Show amount of records -->
<?php
echo $currentNumRec." of ".$numRecords;
?>
</div>
<div class="num-arrows">
<div id="prev"><button ><i class="fas fa-arrow-left"></i></button></div>
<div id="next"><button><i class="fas fa-arrow-right"></i></button></div>
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

 <!-- Change card text on button click -->
 <script>  
//  Get flipper button and element for results
 const toggleFlip = document.getElementById('flip');
 const cardText = document.getElementById('cardText');
//  Import php variables
 let answer = "<?php echo $answer; ?>"
 let question = "<?php echo $question; ?>"
//  Add event listener
toggleFlip.addEventListener('click', () => {
 switch(cardText.innerHTML){
   case question:
     cardText.innerHTML = answer
     break;
    case answer:
    cardText.innerHTML = question
     break; 
 }

// if(cardText.innerHTML === question){
//   cardText.innerHTML = answer
// } else {
//   cardText.innerHTML = question;
// } 

  
})
console.log(answer);
 </script>
</body>
</html>