<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Control Functions Example</title>
    <link rel="stylesheet" href="08.css">
</head>

<body>
    <h1>PHP Control Functions Example</h1>

    <div class="container">
        <?php
        include("09_Question.php");

        echo "<p>This is the main content of the page.</p>";

        require("09_Question.php");

        if (date("H") < 12) {
            echo "<p class='stop'>Good Morning! Stopping the script now.</p>";
            exit;
        }

        if (!file_exists("randomfile.php")) {
            die("<p class='stop'>Sorry! Required file is missing. Script stopped.</p>");
        }

        echo "<p>This will not be executed if exit or die is called.</p>";
        ?>
        <div class="note">This example demonstrates include, require, exit, and die functions in PHP.</div>
    </div>
</body>

</html>
