<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        background-color: cyan;
        margin: 10%;
        padding: 23px;
    }
</style>

<body>
    <div class="container">
        <h1 style="text-align: center;">Let's learn Loop Statements</h1>
        <form method="get">
            <label for="num">Enter Number </label>
            <input type="number" name="num">
            <input type="submit">
        </form>
        <?php
        $language = array("Python", "JAVA", "Nodejs");

        echo "The size of array: " . count($language);
        echo "<br>Element at 0th index of array is: " . $language[0];

        if (isset($_GET["num"])) {
            $number = $_GET["num"];
            $i = 0;
            echo "<br><strong>While Loop - Multiplication Table of: </strong>" . $number . "<br>";

            while ($i <= 10) {
                echo $number . " X " . $i . " = " . ($number * $i) . "<br>";
                $i += 1;
            }
        }

        // While loop
        $j = 0;
        echo "<br><strong>While Loop - Printing Languages: </strong><br>";
        while ($j < count($language)) {
            echo $language[$j] . " ";
            $j++;
        }

        // Do While loop
        $a = 0;
        echo "<br><br><strong>Do While Loop - Numbers: </strong><br>";
        do {
            echo $a . " ";
            $a++;
        } while ($a <= 10);

        // For loop
        echo "<br><br><strong>For Loop - Messages: </strong><br>";
        for ($i = 0; $i <= 5; $i++) {
            print ("Rohan is best <br>");
        }

        // Foreach loop
        echo "<br><strong>Foreach Loop - Languages: </strong><br>";
        foreach ($language as $value) {
            echo $value . " ";
        }
        ?>

    </div>
</body>

</html>