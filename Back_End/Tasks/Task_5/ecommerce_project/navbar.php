<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">🛒 MyStore</a>

    <div class="ml-auto">
        <ul class="navbar-nav flex-row">
            <li class="nav-item mr-3">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="products.php">All Products</a>
            </li>
            <li class="nav-item mr-3">
                <a class="nav-link" href="account.php">Account</a>
            </li>
            <?php if (isset($_SESSION['email'])): ?>
            <li class="nav-item">
                <a class="nav-link text-danger" href="logout.php">Logout</a>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
