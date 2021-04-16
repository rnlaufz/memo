<!-- PHP Block -->

<?php
$connectQuery = mysqli_connect("localhost", "root", "", "memo");

if(mysqli_connect_errno()){
    echo "Failed to connect: " - mysqli_connect_errno();
};

$query = mysqli_query($connectQuery, "INSERT INTO users VALUES('', 'John Doe', 'johnDoe@gmail.com', '1234567Fs!' )");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MEMO | Quiz Yourself!</title>
</head>
<body>
    <div class="home-container">
    <div class="logo-container">
    <h1>MEMO</h1>
    </div>
    <div class="btn-container">
    <p>Quiz Yourself!</p>
    <div class="btn">
    <a href="register.php">Start Now</a>
    <i class="fas fa-long-arrow-alt-right"></i>
    </div>
    
    </div>
    <div class="footer-container">
        <p>MEMO Copyright 2021 &copy; All rights reserved | Build by /RZ</p>
    </div>
    </div>

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/415bbac1bd.js" crossorigin="anonymous"></script>
</body>
</html>