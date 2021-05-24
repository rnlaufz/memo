<?php
    // Delete cards
    if(isset($_POST['delCards'])){
        $query = mysqli_query($connectQuery, "DELETE FROM memocards WHERE userkey='$checkUserKey'");
        header("Location: newCard.php");
    }
    // Delete account
    if(isset($_POST['delAcc'])){
        $query = mysqli_query($connectQuery, "DELETE FROM memousers WHERE userkey='$checkUserKey'");
        // Destroy session and relocate user
        session_destroy();
        header("Location: index.php");
    }
?>