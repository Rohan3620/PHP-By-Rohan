<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Case Calculator</title>
    <link rel="stylesheet" href="04.css">
</head>
<body>
    <h2>Switch Case Calculator</h2>

    <form method="post" action="">
        <label>Enter First Number:</label>
        <input type="number" name="a" required>

        <label>Enter Second Number:</label>
        <input type="number" name="b" required>

        <label>Select Operation:</label>
        <select name="choice" required>
            <option value="1">Addition</option>
            <option value="2">Subtraction</option>
            <option value="3">Multiplication</option>
            <option value="4">Division</option>
            <option value="5">Modulus</option>
        </select>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $choice = $_POST['choice'];

        echo "<table>";
        echo "<caption><b>Result</b></caption>";
        echo "<tr><th>Operation</th><th>Expression</th><th>Result</th></tr>";

        switch ($choice) {
            case 1:
                $c = $a + $b;
                echo "<tr><td>Addition</td><td>$a + $b</td><td>$c</td></tr>";
                break;
            case 2:
                $c = $a - $b;
                echo "<tr><td>Subtraction</td><td>$a - $b</td><td>$c</td></tr>";
                break;
            case 3:
                $c = $a * $b;
                echo "<tr><td>Multiplication</td><td>$a * $b</td><td>$c</td></tr>";
                break;
            case 4:
                if ($b != 0) {
                    $c = $a / $b;
                    echo "<tr><td>Division</td><td>$a / $b</td><td>$c</td></tr>";
                } else {
                    echo "<tr><td colspan='3'>Cannot divide by zero</td></tr>";
                }
                break;
            case 5:
                $c = $a % $b;
                echo "<tr><td>Modulus</td><td>$a % $b</td><td>$c</td></tr>";
                break;
            default:
                echo "<tr><td colspan='3'>Invalid Choice</td></tr>";
                break;
        }

        echo "</table>";
    }
    ?>
</body>
</html>
