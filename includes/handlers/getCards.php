<?php
// Get user's name
$userQuery = mysqli_query($connectQuery, "SELECT * FROM memousers WHERE userkey='$checkUserKey'");
$userRow = mysqli_fetch_array($userQuery);
$userName = $userRow['name'];

// Get all user's cards
$query = mysqli_query($connectQuery, "SELECT * FROM memocards WHERE userkey='$checkUserKey'");

$numCard = 0;
// Increase card number
function increaseCardNum(){
    $numCard = $numCard + 1;
}

// Count amount of records
$numRecords = mysqli_num_rows($query);

// @TO_DO: change this var counting
$currentNumRec = $numRecords - 1;

$row = mysqli_fetch_array($query);

$question = $row['question'];
$answer = $row['answer'];

?>