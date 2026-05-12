<?php

require("dbc.php");

header('Content-Type: application/json');

$quary = "SELECT * FROM `users`";
$result = mysqli_query($connection, $quary);

if (!$result) {
    http_response_code(500);
    echo json_encode(["error" => mysqli_error($connection)]);
    exit;
}

$customers = [];
while ($row = mysqli_fetch_assoc($result)) {
    $customers[] = $row;
}

echo json_encode($customers);