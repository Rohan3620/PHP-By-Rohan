<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array Function</title>
    <link rel="stylesheet" href="05.css">
</head>

<body>
    <h1>Array Sorting</h1>
    <div class="container">
        <?php
        $arr = array(1, 5, 4, 7, 6, 2, 0, 9, 3);
        $arrKey = array("Rohan" => 21, "Krishna" => 18, "Ram" => 31, "Ravi" => 23);

        echo "<div class='section'>";
        echo "<h2>Indexed Array Sorting</h2>";
        echo "<div class='note'>Array before sorting:</div>";
        echo "<div class='output'>";
        print_r($arr);
        echo "</div>";

        sort($arr);
        echo "<div class='note'>Array after sorting (sort):</div>";
        echo "<div class='output'>";
        print_r($arr);
        echo "</div>";

        rsort($arr);
        echo "<div class='note'>Array after sorting (rsort):</div>";
        echo "<div class='output'>";
        print_r($arr);
        echo "</div>";

        function compareNumbers($a, $b)
        {
            if ($a == $b) return 0;
            return ($a < $b) ? -1 : 1;
        }

        usort($arr, "compareNumbers");
        echo "<div class='note'>Array after sorting (usort with custom function):</div>";
        echo "<div class='output'>";
        print_r($arr);
        echo "</div>";
        echo "</div>";

        echo "<div class='section'>";
        echo "<h2>Associative Array Sorting</h2>";
        echo "<div class='note'>Array before sorting:</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        asort($arrKey);
        echo "<div class='note'>Array after asort:</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        arsort($arrKey);
        echo "<div class='note'>Array after arsort:</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        ksort($arrKey);
        echo "<div class='note'>Array after ksort:</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        krsort($arrKey);
        echo "<div class='note'>Array after krsort:</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";
        echo "</div>";
        ?>
    </div>
</body>

</html>
