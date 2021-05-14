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
        <p id="cardText"></p>
    </div>


<div class="card-navigation"> 
<div class="num-cards" id="current-of-all"></div>
<div class="num-arrows">
<div id="prev">
<button type='submit' id='prevBtn'><i class="fas fa-arrow-left"></i></button>
</div>
<div id="next">
<button type='submit' id='nextBtn'><i class="fas fa-arrow-right"></i></button>
</div>
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
 

 <!-- Change card text on button click, show next and prev cards, apply animations -->
 <script>  
//  Card text
  const cardText = document.getElementById('cardText');
// Get data from server 
let getJSON = [<?php echo $json; ?>];
const dataLength = getJSON[0].length;
// Set incrementer
let numCard = 0;
let {question, answer} = getJSON[0][0];

// Get buttons
const prev = document.getElementById('prevBtn');
const next = document.getElementById('nextBtn');

// Get card
const card = document.querySelector('.card');

// Get number of current card and all cards
const currentOfAll = document.getElementById('current-of-all');
// As initial array elem is zero which is not suitable for representation
let currentCard = 1;

// Set initial text
cardText.innerHTML = question;
currentOfAll.innerHTML = `${currentCard} of ${dataLength}`;

// Apply eventListeners
prev.addEventListener('click', () => {
  numCard = numCard - 1;
  currentCard = currentCard - 1;
  if(numCard >= 0){
   question = getJSON[0][numCard].question;
   answer = getJSON[0][numCard].answer;
   cardText.innerHTML = question;
   currentOfAll.innerHTML = `${currentCard} of ${dataLength}`;
    //  Add animation
     card.style.animation = 'fadeIn .3s';
     cardText.style.animation = 'fadeIn .5s';
      // Clear animation
     setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
  } 
  if(numCard < 0) {
   numCard = dataLength - 1;
   currentCard = dataLength;
   question = getJSON[0][numCard].question;
   answer = getJSON[0][numCard].answer;
   cardText.innerHTML = question;
   currentOfAll.innerHTML = `${currentCard} of ${dataLength}`;
       //  Add animation
       card.style.animation = 'fadeIn .3s';
     cardText.style.animation = 'fadeIn .5s';
      // Clear animation
     setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
  }
})
next.addEventListener('click', () => {
 numCard = numCard + 1;
 currentCard = currentCard + 1;
 if(numCard < dataLength){
 question = getJSON[0][numCard].question;
 answer = getJSON[0][numCard].answer;

 cardText.innerHTML = question;
 currentOfAll.innerHTML = `${currentCard} of ${dataLength}`;
     //  Add animation
     card.style.animation = 'fadeIn .3s';
     cardText.style.animation = 'fadeIn .5s';
      // Clear animation
     setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
 } 
 if(numCard >= dataLength) {
  numCard = 0; 
  currentCard = 1;
  question = getJSON[0][numCard].question;
  answer = getJSON[0][numCard].answer;
  cardText.innerHTML = question;
  currentOfAll.innerHTML = `${currentCard} of ${dataLength}`;
       //  Add animation
       card.style.animation = 'fadeIn .3s';
     cardText.style.animation = 'fadeIn .5s';
      // Clear animation
     setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
 }
})

//  Get flipper button and element for results
 const toggleFlip = document.getElementById('flip');

//  Add event listener
toggleFlip.addEventListener('click', () => {
 switch(cardText.innerHTML){
   case question:
  //  Set text
     cardText.innerHTML = answer
    //  Add animation
     card.style.animation = 'flip 1s';
     cardText.style.animation = 'fadeIn 1.2s';
      // Clear animation
     setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
     break;
    case answer:
    // Set text
    cardText.innerHTML = question
    // Add animation
    card.style.animation = ' flip 1s';
    cardText.style.animation = 'fadeIn 1.2s';
    // Clear animation
    setTimeout(() => {
      card.style.animation = '';
      cardText.style.animation = '';
     }, 1010);
     break; 
 }  
})
 </script>
</body>
</html>