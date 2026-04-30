<?php


// if(isset($_POST["submit"])){
//     $num1 = $_POST["num1"];
//     $num2 = $_POST["num2"];
//     $operator = $_POST["operator"];
//     switch($operator){
//         case "+":
//             $result = $num1+$num2;
//             break;
//         case "-":
//             $result = $num1-$num2;
//             break;
//         case "*":
//             $result = $num1*$num2;
//             break;
//         case "/":
//             $result = $num1/$num2;
//             break;
//     }
//     echo $result;

// }
session_start();
if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST"){
    $email = $_POST['email'];
    $password= $_POST['password'];
    // if(isset($_POST['remember'])&& $_POST['remember']==true){
    //     setcookie("email",$email,time()+3600);
    //     setcookie("password",$password,time()+3600);
    // }
    $_SESSION['password'] = $password;
    $error = [];
    if(strlen($email) < 6 || strlen($email) > 14){
        $error[] = "the email must be between 6 and 14 characters";
    }
    if(strlen($password) < 4 || strlen($password) > 14){
        $error[] = "the password must be between 4 and 14 characters";
    }
    if($error){
        $_SESSION['error'] = $error;
        header("location:welcome.php");
        exit();
    } else {
        $_SESSION['email'] = $email;
        header("location:welcome.php");
        exit();
    }
}
?>
?>