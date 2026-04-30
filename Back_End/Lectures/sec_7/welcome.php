<?php
session_start();
echo "welcome ".$_SESSION["email"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <br>
    <a class="btn btn-danger mb-3" href="logout.php">Logout</a>
</body>
</html>