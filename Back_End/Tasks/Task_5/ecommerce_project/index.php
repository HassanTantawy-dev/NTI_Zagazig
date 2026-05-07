<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyStore - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        .site-header {
            background-image: url('images/header.jpg');
            background-size: cover;
            background-position: center;
            background-color: #333;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-shadow: 2px 2px 6px black;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="site-header">
    <div class="text-center">
        <h1 class="display-4">Welcome to Our Store</h1>
        <p class="lead">Find the best products at the best prices</p>
        <a href="products.php" class="btn btn-warning btn-lg mt-3">Shop Now</a>
    </div>
</div>

<?php if (isset($_SESSION['email'])): ?>
<div class="container mt-4">
    <div class="alert alert-success">
        👋 Welcome back! You are logged in as: <strong><?= $_SESSION['email'] ?></strong>
    </div>
</div>
<?php endif; ?>

</body>
</html>
