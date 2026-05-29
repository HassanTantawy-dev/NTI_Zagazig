<?php
$dsn = new PDO("mysql:host=localhost;dbname=users", 'root', '');


$query = "INSERT INTO users (first_name, last_name, email) VALUES (:first_name, :last_name, :email)";
$result = $dsn->prepare($query);
$result->execute([
    ":first_name" => "Hassan",
    ":last_name" => "Ali",
    ":email" => "1@1.com"
]);