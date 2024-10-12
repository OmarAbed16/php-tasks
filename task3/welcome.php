<?php
session_start();
if (!isset($_SESSION['user_data'])) {
    header("Location: login.php");
    exit();
}

$user_data = $_SESSION['user_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f9f9f9; }
        .welcome-container { text-align: center; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); }
        .welcome-message { font-size: 1.5rem; color: #333; }
        .user-email { font-size: 1.2rem; color: #555; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-message">Welcome to Our Platform!</h1>
        <p class="user-email">Your email: <?php echo htmlspecialchars($user_data['email']); ?></p>
    </div>
</body>
</html>
