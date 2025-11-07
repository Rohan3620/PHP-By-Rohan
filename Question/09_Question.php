<!DOCTYPE html>
<html>
<head>
    <title>Form Validation with filter_var()</title>
        <link rel="stylesheet" href="09.css">

</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $age = $_POST['age'];

        // Validate Name (not empty)
        if (empty($name)) {
            echo "<p style='color:red;'> Name is required</p>";
        } else {
            echo "<p style='color:green;'> Name: $name</p>";
        }

        // Validate Email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'> Invalid Email</p>";
        } else {
            echo "<p style='color:green;'> Email: $email</p>";
        }

        // Validate Age (must be integer)
        if (!filter_var($age, FILTER_VALIDATE_INT)) {
            echo "<p style='color:red;'> Age must be a number</p>";
        } else {
            echo "<p style='color:green;'> Age: $age</p>";
        }
    }
    ?>
</body>
</html>
