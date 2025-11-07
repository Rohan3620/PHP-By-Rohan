<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="13.css">
</head>
<body>
    <div class="login-container">
        <h2>User Login</h2>

        <form method="post" action="">
            <label>Username:</label>
            <input type="text" name="username"><br><br>

            <label>Password:</label>
            <input type="password" name="password"><br><br>

            <input type="submit" name="login" value="Login">
        </form>

        <div class="message">
            <?php
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];

                $validUser = "admin";
                $validPass = "12345";

                if (empty($username) || empty($password)) {
                    echo "<p class='error'>Both fields are required!</p>";
                } elseif ($username === $validUser && $password === $validPass) {
                    echo "<p class='success'>Login Successful! Welcome, <b>$username</b></p>";
                } else {
                    echo "<p class='error'>Invalid Username or Password</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
