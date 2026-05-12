<?php

require("dbc.php");

$data = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $data['first_name'] ??$_POST['first_name'] ;
    $last_name = $data['last_name'] ??$_POST['last_name'] ;
    $email = $data['email'] ??$_POST['email'] ;
    $gender = $data['gender'] ??$_POST['gender'];
    $money = $data['money'] ??$_POST['money'] ;
    $city = $data['city'] ??$_POST['city'];
    $country = $data['country'] ??$_POST['country'];


    $query = "INSERT INTO `users` (first_name, last_name, email, gender, money, city, country) VALUES ('$first_name', '$last_name', '$email', '$gender', '$money', '$city', '$country')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo json_encode(['message' => 'User created successfully']);
    } else {
        echo json_encode(['message'=> 'Failed to create user']);
    }
} 