<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require("dbc.php");
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $money = $_POST["money"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        $query = "UPDATE `users` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `gender`='$gender', `money`='$money', `city`='$city', `country`='$country' WHERE id=$id";
    } else {
        $query = "UPDATE `users` SET `first_name`='$first_name', `last_name`='$last_name', `email`='$email', `gender`='$gender', `money`='$money', `city`='$city', `country`='$country' WHERE id=$id";
    }
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

}


?>