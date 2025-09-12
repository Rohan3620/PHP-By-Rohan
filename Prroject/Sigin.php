<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign In Page</title>
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
        <h1>Sign In</h1>
        <form method="POST">
            <label for="name">Full Name</label>
            <input type="text" name="name" id="name" required>

            <label for="city">City</label>
            <input type="text" name="city" id="city" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="btn">Sign In</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $city = $_POST["city"];
            $username = $_POST["username"];
            $password = $_POST["password"];

            if (!empty($name) && !empty($city) && $username == "Rohan" && $password == "1234") {
                header("Location: main.php");
                exit();
            } else {
                echo "<p style='color:red;'>Invalid details.</p>";
            }
        }
        ?>

    </div>
</body>

</html>
