<?php

if(isset($_SESSION['userKey'])){
$checkUserKey = $_SESSION['userKey'];
} else {
    header("Location: login.php");
};

?>