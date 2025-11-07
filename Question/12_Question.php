<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information Form</title>
    <link rel="stylesheet" href="12.css">
</head>
<body>
    <div class="form-container">
        <h2>Personal Information Form</h2>

        <!-- POST form -->
        <form method="post" action="">
            <label>Name:</label>
            <input type="text" name="name" required><br><br>

            <label>Email:</label>
            <input type="email" name="email" required><br><br>

            <label>Age:</label>
            <input type="number" name="age" required><br><br>

            <label>Gender:</label>
            <input type="radio" name="gender" value="Male" required> Male
            <input type="radio" name="gender" value="Female" required> Female
            <br><br>

            <input type="submit" value="Submit with POST">
        </form>

        <br>

        <form method="get" action="">
            <input type="hidden" name="name" value="Demo User">
            <input type="hidden" name="email" value="demo@gmail.com">
            <input type="hidden" name="age" value="25">
            <input type="hidden" name="gender" value="Male">
            <input type="submit" value="Submit with GET">
        </form>
    </div>

    <div class="output">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "<h3>Data Received via POST:</h3>";
            echo "Name: " . $_POST['name'] . "<br>";
            echo "Email: " . $_POST['email'] . "<br>";
            echo "Age: " . $_POST['age'] . "<br>";
            echo "Gender: " . $_POST['gender'] . "<br>";
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
            echo "<h3>Data Received via GET:</h3>";
            echo "Name: " . $_GET['name'] . "<br>";
            echo "Email: " . $_GET['email'] . "<br>";
            echo "Age: " . $_GET['age'] . "<br>";
            echo "Gender: " . $_GET['gender'] . "<br>";
        }

        if (!empty($_REQUEST)) {
            echo "<h3>Data Received via REQUEST (Works for both GET & POST):</h3>";
            echo "Name: " . $_REQUEST['name'] . "<br>";
            echo "Email: " . $_REQUEST['email'] . "<br>";
            echo "Age: " . $_REQUEST['age'] . "<br>";
            echo "Gender: " . $_REQUEST['gender'] . "<br>";
        }
        ?>
    </div>
</body>
</html>
