<?php
session_start();

$server = "sql311.infinityfree.com";
$dbusername = "if0_39950036";
$dbpassword = "Rcjpa1exs4UcOUS";
$database = "if0_39950036_PARIVAHAN";

$con = mysqli_connect($server, $dbusername, $dbpassword, $database);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM signin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION["username"] = $username;
        header("Location: main_Server.php");
        exit();
    } else {
        header("Location: Sigin_Server.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Parivahan Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>PARIVAHAN SEWA</h1>
    <h2>Driving License Related Services</h2>
    <div class="box">
        <h1>Login</h1>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
</html>
