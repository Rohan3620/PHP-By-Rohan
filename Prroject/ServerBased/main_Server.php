<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>🚦 PARIVAHAN SEWA</h1>
    <h2>Driving License Related Services</h2>
    <p>
        Various services related to new/old driving licence or learner's
        licence like <br> Appointment Booking, Duplicate driving licence,
        Application Status, Online test for learner's licence, etc.
    </p>

    <div class="box">
        <form method="post">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name" required>

            <label for="DOB">Date of Birth</label>
            <input type="date" id="DOB" name="DOB" required>

            <label for="EyeSight">EyeSight (min 25 required)</label>
            <input type="number" id="EyeSight" name="EyeSight" min="0" max="100" required>

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>

    <?php

    error_reporting(E_ERROR | E_PARSE);
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "PARIVAHAN";
    $con = mysqli_connect($server, $username, $password, $database);
    if (!$con) {
        die("Connection error" . mysqli_connect_error());
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $DOB = $_POST["DOB"];
            $name = $_POST["Name"];
            $eyesight = $_POST["EyeSight"];
            $today = date("Y-m-d");

            $diff = date_diff(date_create($DOB), date_create($today));
            $age = $diff->y;

            if ($age >= 18 && $age <= 60) {
                if ($eyesight >= 25) {
                    echo "<p class='success'>🎉 Congratulations $name! <br> You are eligible for a Driving License.</p>";
                    
                    $sql = "INSERT INTO `dl_data` (`sno`, `Name`, `DOB`, `EyeSight`, `Time`) 
            VALUES (NULL, '$name', '$DOB', '$eyesight', current_timestamp());";
                    mysqli_query($con, $sql);
                } else {
                    echo "<p class='error'>❌ Sorry $name, your vision is not good enough for driving.</p>";
                }
            } else {
                echo "<p class='error'>❌ Sorry $name, you are not eligible for a Driving License.<br>
            Your age is $age and minimum age is 18.</p>";
            }
        }
    }
    ?>
</body>

</html>