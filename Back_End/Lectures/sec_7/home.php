<?php
session_start();
if(isset($_SESSION['error'])){
    foreach($_SESSION['error'] as $error){
        echo $error;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <!-- <form class="container w-50" action="index.php" method="post">

        <div class="form-group">
            <label for="exampleInputEmail1">number 1</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="num1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">number 2</label>
            <input type="number" name="num2" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <select name="operator" id="" class="form-control m-auto w-25">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success btn-block" name="submit">Submit</button>
    </form> -->

    <form class="container w-50" action="index.php" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" value="<?php if (isset($_COOKIE["email"])) echo($_COOKIE["email"]) ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" value="<?php if (isset($_COOKIE["password"])) echo($_COOKIE["password"]) ?>" name="password" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>