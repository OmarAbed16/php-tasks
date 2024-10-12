<?php
session_start();
$error_message = $success_message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $familyname = $_POST['familyname'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    $age = (int)date("Y") - (int)$year;
    if (date("m") < $month || (date("m") == $month && date("d") < $day)) {
        $age--;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = "Invalid email format.";
    } elseif (!preg_match("/^[0-9]{14}$/", $mobile)) {
        $error_message = "Mobile number must be exactly 14 digits.";
    } elseif (!preg_match("/^[a-zA-Z]+$/", $fname) || !preg_match("/^[a-zA-Z]+$/", $mname) || !preg_match("/^[a-zA-Z]+$/", $lname) || !preg_match("/^[a-zA-Z]+$/", $familyname)) {
        $error_message = "All name fields must contain only letters.";
    } elseif (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
        $error_message = "Password must be at least 8 characters, include upper and lower case letters, a number, and a special character, with no spaces.";
    } elseif ($password !== $confirm_password) {
        $error_message = "Passwords do not match.";
    } elseif ($age < 16) {
        $error_message = "You must be at least 16 years old to register.";
    } else {
        $user_data = [
            'email' => $email,
            'mobile' => $mobile,
            'fname' => $fname,
            'mname' => $mname,
            'lname' => $lname,
            'familyname' => $familyname,
            'password' => $password,
        ];
        $_SESSION['user_data'] = $user_data;
        $success_message = "Account created successfully!";
        header("Location: login.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f9f9f9; }
        .signup-container { width: 100%; max-width: 500px; padding: 20px; background-color: #fff; border-radius: 10px; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); }
        .btn-signup { background-color: #FF6B6B; color: #fff; border-radius: 25px; width: 100%; }
        .btn-signup:hover { background-color: #e05a5a; }
        .form-text { text-align: center; margin-top: 15px; color: #666; }
        .form-text a { color: #FF6B6B; font-weight: bold; text-decoration: none; }
        .error, .success { font-size: 0.9rem; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <div class="signup-container">
        <h2 class="text-center">Sign Up</h2>
        <p class="text-center">Create your account</p>

        <?php if ($error_message): ?>
            <p class="error text-center"><?php echo htmlspecialchars($error_message); ?></p>
        <?php elseif ($success_message): ?>
            <p class="success text-center"><?php echo htmlspecialchars($success_message); ?></p>
        <?php endif; ?>

        <form action="signup.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" name="fname" placeholder="First Name" required>
                <input type="text" class="form-control" name="mname" placeholder="Middle Name" required>
                <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                <input type="text" class="form-control" name="familyname" placeholder="Family Name" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="number" class="form-control" name="day" placeholder="Day (DD)" min="1" max="31" required>
                <input type="number" class="form-control" name="month" placeholder="Month (MM)" min="1" max="12" required>
                <input type="number" class="form-control" name="year" placeholder="Year (YYYY)" min="1900" max="<?php echo date("Y"); ?>" required>
            </div>
            <button type="submit" class="btn btn-signup">Sign Up</button>
            <p class="form-text">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>

    <script>
        function validateForm() {
            const email = document.getElementById("email").value;
            const mobile = document.getElementById("mobile").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm_password").value;
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const mobilePattern = /^[0-9]{14}$/;
            const passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
            
            if (!emailPattern.test(email)) {
                alert("Invalid email format.");
                return false;
            }
            if (!mobilePattern.test(mobile)) {
                alert("Mobile number must be exactly 14 digits.");
                return false;
            }
            if (!passwordPattern.test(password)) {
                alert("Password must be at least 8 characters, include upper and lower case letters, a number, and a special character, with no spaces.");
                return false;
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match.");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
