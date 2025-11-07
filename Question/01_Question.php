<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is typecasting</title>
    <link rel="stylesheet" href="01.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Type Casting</h1>
            <h3>Implicit type casting</h3>
            <?php
            $a = 10;
            $b = 2.5;
            echo "a is " . gettype($a) .
                " and b is " . gettype($b) .
                ".<br> But addition of a+b is " . ($a + $b) .
                " <br>which is " . gettype($a + $b) .
                ". It is implicit.";

            $c = "2.5";
            $d = "10";
            $e = "R";
            echo "<br><br>a is " . gettype($a) .
                " and c,d,e is " . gettype($c) .
                ". <br>But addition of a+b is " . ($a + $c) .
                " <br>which is " . gettype($a + $c) .

                ". <br>But addition of a+d is " . ($a + $d) .
                " <br>which is " . gettype($a + $d) . "";
            ?>

            <h3>Explicit type casting</h3>
            <?php
            $a = "123";
            echo "Before casting : $a is type: " . gettype($a) . "<br>";
            $a = (int) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (float) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (array) $a;
            echo "After casting : " . print_r($a, true) . " is type: " . gettype($a) . "<br><br>";

            $a = 123;
            echo "Before casting : $a is type: " . gettype($a) . "<br>";
            $a = (string) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (float) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (array) $a;
            echo "After casting : " . print_r($a, true) . " is type: " . gettype($a) . "<br><br>";

            $a = 123.5;
            echo "Before casting : $a is type: " . gettype($a) . "<br>";
            $a = (int) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (string) $a;
            echo "After casting : " . $a . " is type: " . gettype($a) . "<br>";
            $a = (array) $a;
            echo "After casting : " . print_r($a, true) . " is type: " . gettype($a) . "<br><br>";

            $a = [10,20];
            echo "Before casting :  ".print_r($a, true) ." is type: " . gettype($a) . "<br>";
            $a = (int) $a;
            echo "After casting : " .  print_r($a, true)  . " is type: " . gettype($a) . "<br>";
            $a = (float) $a;
            echo "After casting : " .  print_r($a, true)  . " is type: " . gettype($a) . "<br>";
            $a = (array) $a;
            echo "After casting : " . print_r($a, true) . " is type: " . gettype($a) . "<br>";
            ?>
        </div>
    </div>
</body>
</html>
