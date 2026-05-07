<?php
session_start();

$products = [
    'Wireless Headphones' => [
        'price' => '620',
        'img'   => 'images/1.jpg',
        'desc'  => 'High quality sound with noise cancellation technology.'
    ],
    'Smart Watch' => [
        'price' => '6500',
        'img'   => 'images/2.jpg',
        'desc'  => 'Track your fitness and stay connected all day.'
    ],
    'Laptop Stand' => [
        'price' => '450',
        'img'   => 'images/3.jpg',
        'desc'  => 'Ergonomic aluminum stand for your laptop.'
    ],
    'Mechanical Keyboard' => [
        'price' => '1200',
        'img'   => 'images/4.jpg',
        'desc'  => 'Tactile typing experience with RGB backlight.'
    ],
    'USB-C Hub' => [
        'price' => '890',
        'img'   => 'images/5.jpg',
        'desc'  => '7-in-1 hub with HDMI, USB 3.0, and SD card slots.'
    ],
    'Webcam HD' => [
        'price' => '3200',
        'img'   => 'images/6.jpg',
        'desc'  => '1080p webcam perfect for video calls and streaming.'
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyStore - All Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <style>
        .card { height: 100%; }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            background-color: #eee;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2 class="mb-4">All Products</h2>

    <div class="row">
        <?php foreach ($products as $product_name => $values): ?>
        <div class="col-md-4 mb-4 d-flex">
            <div class="card w-100 shadow-sm">
                <img src="<?= $values['img'] ?>"
                     class="card-img-top"
                     alt="<?= $product_name ?>"
                     onerror="this.src='https://via.placeholder.com/300x200?text=No+Image'">

                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= $product_name ?></h5>
                    <p class="card-text text-muted"><?= $values['desc'] ?></p>
                    <p class="font-weight-bold text-success mt-auto">
                        💰 EGP <?= number_format($values['price']) ?>
                    </p>
                    <a href="#" class="btn btn-primary">Add to Cart</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>
