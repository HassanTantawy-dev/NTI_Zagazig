<?php
session_start();

$products = [
    'Wireless Headphones' => [
        'price' => '620',
        'img'   => 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400',
        'desc'  => 'High quality sound with noise cancellation technology.'
    ],
    'Smart Watch' => [
        'price' => '6500',
        'img'   => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400',
        'desc'  => 'Track your fitness and stay connected all day.'
    ],
    'Laptop Stand' => [
        'price' => '450',
        'img'   => 'https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?w=400',
        'desc'  => 'Ergonomic aluminum stand for your laptop.'
    ],
    'Mechanical Keyboard' => [
        'price' => '1200',
        'img'   => 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400',
        'desc'  => 'Tactile typing experience with RGB backlight.'
    ],
    'USB-C Hub' => [
        'price' => '890',
        'img'   => 'https://images.unsplash.com/photo-1625948515291-69613efd103f?w=400',
        'desc'  => '7-in-1 hub with HDMI, USB 3.0, and SD card slots.'
    ],
    'Webcam HD' => [
        'price' => '3200',
        'img'   => 'https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?w=400',
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
                     alt="<?= $product_name ?>">

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
