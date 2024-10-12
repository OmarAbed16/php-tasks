<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
    header("Location: login.php");
    exit();
}

// Sample user data; in a real application, replace with database queries
if (!isset($_SESSION['user_list'])) {
    $_SESSION['user_list'] = [
        1 => ['fname' => 'John', 'lname' => 'Doe', 'email' => 'omar@example.com', 'password' => 'Password@123', 'date_created' => '2024-01-01', 'last_login' => '2024-01-10'],
        // Add more users here as needed
    ];
}

$user_list = &$_SESSION['user_list'];

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    unset($user_list[$delete_id]);
    header("Location: admin.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $user_id = $_POST['user_id'];
    $user_list[$user_id]['fname'] = $_POST['fname'];
    $user_list[$user_id]['lname'] = $_POST['lname'];
    $user_list[$user_id]['email'] = $_POST['email'];
    $user_list[$user_id]['password'] = $_POST['password'];
    header("Location: admin.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Admin Dashboard</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Date Created</th>
                    <th>Last Login</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user_list as $id => $user): ?>
                    <tr>
                        <td><?php echo $id; ?></td>
                        <td><?php echo htmlspecialchars($user['fname'] . ' ' . $user['lname']); ?></td>
                        <td><?php echo htmlspecialchars($user['email']); ?></td>
                        <td><?php echo htmlspecialchars($user['password']); ?></td>
                        <td><?php echo htmlspecialchars($user['date_created']); ?></td>
                        <td><?php echo htmlspecialchars($user['last_login']); ?></td>
                        <td>
                            <a href="admin.php?edit_id=<?php echo $id; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="admin.php?delete_id=<?php echo $id; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php if (isset($_GET['edit_id'])): 
        $edit_id = $_GET['edit_id'];
        $edit_user = $user_list[$edit_id];
    ?>
    <div class="container mt-5">
        <h3>Edit User</h3>
        <form action="admin.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $edit_id; ?>">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" name="fname" value="<?php echo htmlspecialchars($edit_user['fname']); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" name="lname" value="<?php echo htmlspecialchars($edit_user['lname']); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($edit_user['email']); ?>" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" value="<?php echo htmlspecialchars($edit_user['password']); ?>" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
    <?php endif; ?>
</body>
</html>
