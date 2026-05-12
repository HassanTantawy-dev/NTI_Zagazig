<?php

require("dbc.php");

header('Content-Type: application/json');

if(!isset($_GET['id'])){
    echo json_encode(['error' => 'ID parameter is required']);
}else{
    $id = $_GET['id'];
    $quary = "SELECT * FROM `users` WHERE id = $id";
    $result = mysqli_query($connection, $quary);
    if(mysqli_num_rows($result) == 0){
        echo json_encode(['error' => 'No user found with the given ID']);
        exit();
    }else{
        $customers = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $data=json_encode($customers);
        echo $data;
    }
    
}

