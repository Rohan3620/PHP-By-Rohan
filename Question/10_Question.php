<!DOCTYPE html>
<html>
<head>
    <title>Cookie Example with Logout</title>
    <link rel="stylesheet" href="10.css">
</head>
<body>

<?php

if (!isset($_COOKIE["user"])) {
    setcookie("user", "Rohan", time() + 60, "/");  // valid for 1 min
    echo "<h3>Cookie has been created. Please refresh the page.</h3>";
} else {
    echo "<h3>Welcome back, " . $_COOKIE["user"] . "!</h3>";
    echo '<a href="?logout=true">Logout</a>';
}

if (isset($_GET['logout'])) {
    setcookie("user", "", time() - 3600, "/"); // Expire cookie
    echo "<h3>You have been logged out. Cookie deleted!</h3>";
}
?>

</body>
</html>
