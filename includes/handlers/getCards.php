<?php
// Get user's name
$userQuery = mysqli_query($connectQuery, "SELECT * FROM memousers WHERE userkey='$checkUserKey'");
$userRow = mysqli_fetch_array($userQuery);
$userName = $userRow['name'];

// Get all user's cards
$query = mysqli_query($connectQuery, "SELECT question, answer FROM memocards WHERE userkey='$checkUserKey'");
// Count amount of records
$numRecords = mysqli_num_rows($query);
$currentNumRec = 1;
$question = '';
$answer = '';

// Get data to send in front
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
$json = json_encode($row);
// $question = $row['question'];
// $answer = $row['answer'];

// // @TO_DO: change this var counting
// if(isset($_POST['prev'])){
//     $currentNumRec = $numRecords - $currentNumRec;
//     // $_SESSION['currentNumRec'] = $currentNumRec;
//     // $prevQuery = mysqli_query($connectQuery, "SELECT * FROM memocards WHERE userkey='$checkUserKey' ORDER BY id DESC LIMIT 1, $currentNumRec");
//     // $prevRow = mysqli_fetch_array($prevQuery);
//     // // These two send into JS
//     // $question = $prevRow['question'];
//     // $answer = $prevRow['answer'];

//     echo $currentNumRec;

// }
// if(isset($_POST['next'])){
//     $currentNumRec = $currentNumRec + 1;
//     // $_SESSION['currentNumRec'] = $currentNumRec; 
//     // $nextQuery = mysqli_query($connectQuery, "SELECT * FROM memocards WHERE userkey='$checkUserKey' ORDER BY id DESC LIMIT 1, $currentNumRec");
//     // $nextRow = mysqli_fetch_array($nextQuery);
//     // // These two send into JS
//     // $question = $nextRow['question'];
//     // $answer = $nextRow['answer'];

//     echo $currentNumRec;
// }


?>