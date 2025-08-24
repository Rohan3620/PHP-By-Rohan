<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>

<body>
    <div class="container">
        This is my first PHP website
    </div>
    <?php
    $name = "Rohan";
    echo $name;

    $a = 10;
    $b = 100;
    define("PI",3.14);
    echo "<br>";
    echo "Sum of $a and $b is " . ($a + $b);
    echo "<br>";
    echo "Sub of $a and $b is " . ($a - $b);
    echo "<br>";
    echo "Multiply of $a and $b is " . ($a * $b);
    echo "<br>";
    echo "Divide of $a and $b is " . ($a / $b);
    echo "<br>";
    var_dump($a);
    $myvar=(true xor false);
    echo "<br>";
    echo "". ($myvar ?"true":"false") ."";  
    echo "<br>";
    echo PI*7;
    ?>
</body>

</html>