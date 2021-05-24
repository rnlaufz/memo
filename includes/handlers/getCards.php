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
// Get data to send to front
$row = mysqli_fetch_all($query, MYSQLI_ASSOC);
$json = json_encode($row);
?>