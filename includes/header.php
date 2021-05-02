<?php

if(isset($_SESSION['user_identifier'])){
$userKey = $_SESSION['user_identifier'];
} else {
    header("Location: login.php");
};

?>