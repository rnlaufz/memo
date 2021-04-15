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
    <title>MEMO</title>
</head>
<body>
    <h3>MEMO IN CREATION</h3>
</body>
</html>