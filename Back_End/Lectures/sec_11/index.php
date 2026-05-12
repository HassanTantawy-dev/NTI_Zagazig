<?php

require("dbc.php");

$quary = "SELECT * FROM `users`";
$result = mysqli_query($connection, $quary);



?>

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
    <a href="create.php" class="btn btn-primary m-3">Create</a>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Money</th>
                <th scope="col">City</th>
                <th scope="col">Country</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 0;
            while ($user = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <th scope="row"><?php echo ++$i; ?></th>
                    <td><?php echo $user['first_name']; ?></td>
                    <td><?php echo $user['last_name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['gender']; ?></td>
                    <td><?php echo $user['money']; ?></td>
                    <td><?php echo $user['city']; ?></td>
                    <td><?php echo $user['country']; ?></td>
                    <td>
                        <a href="delete.php?id=<?php echo $user['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    <td>
                        <a href="update.php?id=<?php echo $user['id']; ?>" class="btn btn-success">Update</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>