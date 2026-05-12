<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger w-75 mt-3 m-auto">
            <ul>
                <?php foreach ($_SESSION['error'] as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form method="post" action="handlecustomer.php" class="w-75 m-auto">
        <div class="form-group">
            <label for="exampleInputEmail1">first name </label>
            <input type="text" class="form-control" name="first_name" id="exampleInputEmail1"
                aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">last name</label>
            <input type="text" class="form-control" name="last_name" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" class="form-control" name="email" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">gender</label>
            <input type="text" class="form-control" name="gender" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">money</label>
            <input type="number" class="form-control" name="money" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">city</label>
            <input type="text" class="form-control" name="city" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">country</label>
            <input type="text" class="form-control" name="country" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>