<?php
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: 14.2_login_Question.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="14.css">
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $_SESSION['admin']; ?> 👋</h2>
        <p>This is your secure Admin Dashboard.</p>
        <a href="14.3_logout_Question.php" class="btn">Logout</a>
    </div>
</body>
</html>
