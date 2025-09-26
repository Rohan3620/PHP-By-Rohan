<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Array Function</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #061245ff, #764ba2);
            margin: 0;
            padding: 0;
            color: #333;
        }

        h1 {
            text-align: center;
            background: linear-gradient(135deg, #082036ff, #00f2fe);
            color: white;
            padding: 25px;
            margin: 0;
            font-size: 42px;
            letter-spacing: 2px;
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.25);
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        .container {
            margin: 40px auto;
            width: 85%;
            max-width: 1000px;
            background: linear-gradient(135deg, #caea8fff, #00f2fe);
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }

        .section {
            margin-bottom: 35px;
            padding: 20px;
            background: #f9f9ff;
            border-radius: 10px;
            transition: transform 0.2s ease-in-out;
        }

        .section:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.12);
        }

        .section h2 {
            color: #444;
            font-size: 26px;
            margin-bottom: 12px;
            border-left: 6px solid #667eea;
            padding-left: 12px;
            font-weight: 600;
        }

        .note {
            font-size: 17px;
            color: #555;
            margin-top: 12px;
            font-style: italic;
        }

        .output {
            background: #eef2ff;
            border: 1px solid #d1d9ff;
            padding: 15px;
            border-radius: 8px;
            font-family: "Courier New", monospace;
            font-size: 16px;
            margin-top: 10px;
            white-space: pre-wrap;
            color: #222;
        }
    </style>
</head>

<body>
    <h1>Array Function</h1>
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
        echo "<div class ='note'>Array after asort :</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        arsort($arrKey);
        echo "<div class ='note'>Array after arsort :</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        ksort($arrKey);
        echo "<div class ='note'>Array after ksort :</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";

        krsort($arrKey);
        echo "<div class ='note'>Array after krsort :</div>";
        echo "<div class='output'>";
        print_r($arrKey);
        echo "</div>";
        echo "</div>"; // end section
        ?>
    </div>
</body>

</html>
