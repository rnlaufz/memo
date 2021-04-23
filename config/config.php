<?php

// Start bufferization 
ob_start();

// Start session
session_start();

// Connection string
$connectQuery = mysqli_connect("localhost", "root", "", "memo");
// Check DB connection
if(mysqli_connect_errno()){
  echo "Failed to connect to database" + mysqli_connect_errno();
};

?>