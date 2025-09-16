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

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required>

            <label for="username">Username</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" class="btn">Sign In</button>
        </form>
        <?php
        $insert = false;
        $server = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $database = "PARIVAHAN";

        $con = mysqli_connect($server, $dbusername, $dbpassword, $database);

        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];
                $city = $_POST["city"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $email = $_POST["email"];

                $sql = "INSERT INTO `signin` (`sno`, `name`, `city`, `username`, `password`, `time`, `email`) 
                VALUES (NULL, '$name', '$city', '$username', '$password', current_timestamp(), '$email')";

                if ($con->query($sql) === TRUE) {
                    $insert = true;

                
                    $to = $email; 
                    $subject = "Welcome to PARIVAHAN SEWA";
                    $message = "Hello $name,\n\nThank you for signing up!\n\nYou can now use all our driving licence services.\n\nRegards,\nPARIVAHAN SEWA Team";
                    $headers = "From: no-reply@parivahan.com";

                    if (mail($to, $subject, $message, $headers)) {
                        echo "<p>Email sent to $email successfully!</p>";
                    } else {
                        echo "<p>Failed to send email.</p>";
                    }

                    header("Location: main_Server.php");
                    exit();

                } else {
                    echo "ERROR: $sql <br> $con->error";
                }
            }
        }

        $con->close();
        ?>




    </div>
</body>

</html>