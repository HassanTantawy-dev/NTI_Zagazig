<?php

$id = $_GET["id"];
require("dbc.php");

$quary = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($connection, $quary);
if($result) {
    header("location: index.php");
} else {
    echo "Error: " . $quary . "<br>" . mysqli_error($connection);
}