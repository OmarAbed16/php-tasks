<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        p {
            font-size: 1rem;
            margin-bottom: 20px;
            color: #555;
        }
        .btn-login {
            background-color: #4A5BF8;
            color: #fff;
            border-radius: 25px;
            width: 200px;
        }
        .btn-signup {
            background-color: #FF6B6B;
            color: #fff;
            border-radius: 25px;
            width: 200px;
        }
        .illustration {
            width: 150px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello There!</h1>
        <p>Automatic identity verification which enables you to verify your identity</p>
        <img src="./Media/landing_page.png" alt="Illustration" class="illustration">
        <div class="mt-4">
            <a href="login.php" class="btn btn-login btn-lg mb-3">Login</a>
            <a href="signup.php" class="btn btn-signup btn-lg">Sign Up</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
