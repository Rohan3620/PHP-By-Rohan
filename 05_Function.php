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
        function Table($number)
        {


            $i = 0;
            echo "<br><strong>Multiplication Table of: </strong>" . $number . "<br>";
            while ($i <= 10) {
                echo $number . " X " . $i . " = " . ($number * $i) . "<br>";
                $i += 1;
            }
        }
        if (isset($_GET["num"])) {
            $num = $_GET["num"];
            Table($num);
        }
        ?>
    </div>
</body>

</html>