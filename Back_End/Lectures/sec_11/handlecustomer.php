<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    session_start();
    require("dbc.php");
    require("validate.php");

    $errors = [];
    foreach ($validates as $validate_name => $validate_value) {

        $filter_options = isset($validate_value['options']) ? ['options' => $validate_value['options']] : null;
        $value = filter_input(INPUT_POST, $validate_name, $validate_value['filter'], $filter_options);

        if (empty($_POST[$validate_name])) {
            $errors[] = "you must fill " . $validate_name;
        } elseif ($value == false) {
            $errors[] = $validate_value['error'];
        }
    }
    
    if ($errors) {
        $_SESSION['error'] = $errors;
        if (isset($_GET["id"])) {
            header('location: update.php?id=' . $_GET["id"]);
        } else {
            header('location: create.php');
        }
        exit();
    }

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
        $query = "INSERT INTO `users`(`first_name`, `last_name`, `email`, `gender`, `money`, `city`, `country`) 
    VALUES ('$first_name','$last_name','$email','$gender','$money','$city','$country')";
    }
    $result = mysqli_query($connection, $query);

    if ($result) {
        header("location: index.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }

}


?>