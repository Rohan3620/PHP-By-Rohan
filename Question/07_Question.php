<!DOCTYPE html>
<html>
<head>
    <title>User Defined Function</title>
    <link rel="stylesheet" href="07.css">
</head>

<body>
    <h1>User Defined Function</h1>
    <div class="box">
        <form method="post">
            <label for="number">Enter a number: </label>
            <input type="number" name="number" required>
            <input type="submit" value="Calculate">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["number"];

            function factorial($n) {
                if ($n == 0 || $n == 1) {
                    return 1;
                } else {
                    return $n * factorial($n - 1);
                }
            }

            $result = factorial($a);
            echo "<h3>Factorial of $a is: $result</h3>";
        }
        ?>
    </div>
</body>
</html>
