<?php
session_start();

$errors  = [];
$success = '';

if (isset($_POST['login'])) {

    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email format is invalid. Example: user@mail.com";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if (empty($errors)) {
        $_SESSION['email'] = $email;
        header("Location: products.php");
        exit();
    }
}

if (isset($_POST['update_profile'])) {

    $username  = trim($_POST['username']);
    $password  = trim($_POST['password']);
    $email     = trim($_POST['email']);
    $phone     = trim($_POST['phone']);
    $facebook  = trim($_POST['facebook']);
    $twitter   = trim($_POST['twitter']);
    $instagram = trim($_POST['instagram']);

    if (empty($username)) {
        $errors[] = "Username is required.";
    } elseif (strlen($username) < 3) {
        $errors[] = "Username must be at least 3 characters.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email format is invalid.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^[0-9]{10,15}$/', $phone)) {
        $errors[] = "Phone must be numbers only (10 to 15 digits).";
    }

    if (empty($facebook)) {
        $errors[] = "Facebook URL is required.";
    } elseif (!filter_var($facebook, FILTER_VALIDATE_URL)) {
        $errors[] = "Facebook URL is not valid. Example: https://facebook.com/yourname";
    }

    if (empty($twitter)) {
        $errors[] = "Twitter URL is required.";
    } elseif (!filter_var($twitter, FILTER_VALIDATE_URL)) {
        $errors[] = "Twitter URL is not valid. Example: https://twitter.com/yourname";
    }

    if (empty($instagram)) {
        $errors[] = "Instagram URL is required.";
    } elseif (!filter_var($instagram, FILTER_VALIDATE_URL)) {
        $errors[] = "Instagram URL is not valid. Example: https://instagram.com/yourname";
    }

    if (empty($errors)) {
        $_SESSION['username']  = $username;
        $_SESSION['email']     = $email;
        $_SESSION['phone']     = $phone;
        $_SESSION['facebook']  = $facebook;
        $_SESSION['twitter']   = $twitter;
        $_SESSION['instagram'] = $instagram;

        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyStore - Account</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-5" style="max-width: 600px;">

    <?php if (!empty($errors)): ?>
    <div class="alert alert-danger">
        <ul class="mb-0">
            <?php foreach ($errors as $error): ?>
            <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (!isset($_SESSION['email'])): ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">🔐 Login to Your Account</h3>

            <form method="POST" action="account.php">
                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" class="form-control" placeholder="example@mail.com"
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="At least 6 characters">
                </div>

                <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>

    <?php else: ?>

    <div class="card shadow-sm">
        <div class="card-body">
            <h3 class="card-title mb-4">👤 Update Your Profile</h3>
            <p class="text-muted">Logged in as: <strong><?= $_SESSION['email'] ?></strong></p>

            <form method="POST" action="account.php">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Your username"
                           value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : (isset($_SESSION['username']) ? $_SESSION['username'] : '') ?>">
                </div>

                <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="password" class="form-control" placeholder="At least 6 characters">
                </div>

                <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" class="form-control"
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : $_SESSION['email'] ?>">
                </div>

                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" name="phone" class="form-control" placeholder="01XXXXXXXXX"
                           value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : (isset($_SESSION['phone']) ? $_SESSION['phone'] : '') ?>">
                </div>

                <div class="form-group">
                    <label>Facebook Profile URL</label>
                    <input type="text" name="facebook" class="form-control" placeholder="https://facebook.com/yourname"
                           value="<?= isset($_POST['facebook']) ? htmlspecialchars($_POST['facebook']) : (isset($_SESSION['facebook']) ? $_SESSION['facebook'] : '') ?>">
                </div>

                <div class="form-group">
                    <label>Twitter Profile URL</label>
                    <input type="text" name="twitter" class="form-control" placeholder="https://twitter.com/yourname"
                           value="<?= isset($_POST['twitter']) ? htmlspecialchars($_POST['twitter']) : (isset($_SESSION['twitter']) ? $_SESSION['twitter'] : '') ?>">
                </div>

                <div class="form-group">
                    <label>Instagram Profile URL</label>
                    <input type="text" name="instagram" class="form-control" placeholder="https://instagram.com/yourname"
                           value="<?= isset($_POST['instagram']) ? htmlspecialchars($_POST['instagram']) : (isset($_SESSION['instagram']) ? $_SESSION['instagram'] : '') ?>">
                </div>

                <button type="submit" name="update_profile" class="btn btn-success btn-block">Save Profile</button>
            </form>
        </div>
    </div>

    <?php endif; ?>

</div>

</body>
</html>
