=<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
    <link rel="stylesheet" href="11.css">
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <?php
            session_start();

            if (!isset($_SESSION["username"])) {
                $_SESSION["username"] = "Marvel";
                $_SESSION["role"] = "Student";
                echo "<div class='message info'>Session created. Please refresh the page.</div>";
            } else {
                echo "<h2>Welcome, <span class='highlight'>" . $_SESSION["username"] . "</span>!</h2>";
                echo "<p class='role'>Role: <strong>" . $_SESSION["role"] . "</strong></p>";
                echo "<p class='session-id'>Session ID: <code>" . session_id() . "</code></p>";
                echo '<a class="btn logout" href="?logout=true">Logout</a>';
            }

            if (isset($_GET['logout'])) {
                session_unset();
                session_destroy();
                echo "<div class='message logout'>You have been logged out. Session destroyed!</div>";
                exit;
            }
            ?>
        </div>
    </div>
</body>
</html>
