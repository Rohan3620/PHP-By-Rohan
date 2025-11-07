<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table with Loops</title>
    <link rel="stylesheet" href="03.css">
</head>

<body>
    <div class="container">
        <h1>Multiplication Table Using Different Loops</h1>

        <form method="get">
            <label>Enter a Number:</label>
            <input type="number" name="num" required>
            <input type="submit" value="Generate Table">
        </form>

        <?php
        if (isset($_GET['num'])) {
            $num = $_GET['num'];

            echo "<h2>For Loop</h2>";
            echo "<table>";
            echo "<tr><th>Multiplication</th></tr>";
            for ($i = 0; $i <= 10; $i++) {
                $val = $num * $i;
                echo "<tr><td>$num × $i = $val</td></tr>";
            }
            echo "</table>";

            echo "<h2>While Loop</h2>";
            echo "<table>";
            echo "<tr><th>Multiplication</th></tr>";
            $i = 0;
            while ($i <= 10) {
                $val = $num * $i;
                echo "<tr><td>$num × $i = $val</td></tr>";
                $i++;
            }
            echo "</table>";

            echo "<h2>Do-While Loop</h2>";
            echo "<table>";
            echo "<tr><th>Multiplication</th></tr>";
            $i = 0;
            do {
                $val = $num * $i;
                echo "<tr><td>$num × $i = $val</td></tr>";
                $i++;
            } while ($i <= 10);
            echo "</table>";
        }
        ?>
    </div>
</body>

</html>
