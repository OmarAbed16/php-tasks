<?php
session_start();
$error_message = "";

// Superuser credentials (for simplicity, hardcoded here)
$superuser = [
    'email' => 'admin@example.com',
    'password' => 'Admin@123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === $superuser['email'] && $password === $superuser['password']) {
        $_SESSION['is_admin'] = true;
        header("Location: admin.php");
        exit();
    } elseif (isset($_SESSION['user_data']) && $email === $_SESSION['user_data']['email'] && $password === $_SESSION['user_data']['password']) {
        header("Location: welcome.php");
        exit();
    } else {
        $error_message = "Invalid email or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f9f9f9; }
        .login-container { width: 100%; max-width: 400px; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); }
        .btn-login { background-color: #6A67CE; color: #fff; border-radius: 25px; width: 100%; }
        .btn-login:hover { background-color: #5a56b4; }
        .form-text { text-align: center; margin-top: 15px; color: #666; }
        .form-text a { color: #6A67CE; font-weight: bold; text-decoration: none; }
        .error { color: red; font-size: 0.9rem; text-align: center; }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center">Login</h2>
        <p class="text-center">Welcome back! Login with your credentials</p>

        <?php if ($error_message): ?>
            <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-login">Login</button>
            <p class="form-text">Don’t have an account? <a href="signup.php">Sign Up</a></p>
        </form>
    </div>
</body>
</html>
