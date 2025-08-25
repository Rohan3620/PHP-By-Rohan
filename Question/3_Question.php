<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Example</title>
    <style>
        body {
            background-color: rgb(5, 31, 64);
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            color: white;
        }

        .box {
            background: rgb(129, 181, 249);
            width: 30%;
            padding: 20px;
            margin: 50px auto;
            border-radius: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
            color: black;
        }

        form label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        form input {
            width: 95%;
            padding: 8px;
            margin-top: 5px;
            border: none;
            border-radius: 5px;
        }

        form input:focus {
            outline: none;
            border: 2px solid rgb(5, 31, 64);
        }

        .btn {
            margin-top: 15px;
            background: rgb(5, 31, 64);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: rgb(15, 50, 100);
        }

        .h1,
        h2,
        p {
            text-align: center;
        }

        h1 {
            font-size: 3rem;
            text-align: center;
        }
    </style>
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
        <form method="post">
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name">

            <label for="DOB">Date of Birth</label>
            <input type="date" id="DOB" name="DOB">

            <label for="EyeSight">EyeSight</label>
            <input type="number" id="EyeSight" name="EyeSight">

            <button type="submit" class="btn">Submit</button>
        </form>
    </div>
    <?php
    $DOB = $_POST["DOB"];
    $name = $_POST["Name"];
    $eyesight = $_POST["EyeSight"];
    $today = date("d-m-y");

    $diff = date_diff(date_create($DOB), date_create($today));
    $age = $diff->y;
    if ($age >= 18 && $age <= 60) {
        if ($eyesight >= 25) {
            echo "<p style='text-align:center; font-weight:bold;'>Congratulations $name! <br> You are eligible for a Driving License.</p>";

        } else {
            echo "<p style='text-align:center; font-weight:bold; color:Red'>Sorry $name,you are vision is not good  for a driving.</p>";
        }
    } else if ($age < 18 || $age > 60) {
     echo "<p style='text-align:center; font-weight:bold; color:Red'>Sorry $name,you are not eligible for a Driving License.<br>your age is $age and minumum age 18</p>";
    }
    ?>
</body>

</html>