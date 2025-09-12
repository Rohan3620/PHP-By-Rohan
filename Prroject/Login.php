<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>PARIVAHAN SEWA</h1>
    <h2>Driving License Related Services</h2>
    <p>
        Various services related to new/old driving licence or learner's
        licence like <br> Appointment Booking, Duplicate driving licence,
        Application Status, Online test for learner's licence, etc.
    </p>
    <div class="box">
        <h1>Login</h1>
        <form method="POST">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="btn">Login</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username == "Rohan" && $password == "1234") {
                header("Location: main.php");
                exit();
            } else {
                header("Location: Sigin.php");
                exit(); 
            }
        }
        ?>

    </div>
</body>

</html>