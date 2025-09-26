<html>

<head>
    <title>2-D Array </title>
</head>

<body>
    <h2>2-D indexed Array</h2>
    <?PHP
    $arr = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    print_r($arr);
    echo "<br><br>";
    echo "[";
    foreach ($arr as $i) {
        foreach ($i as $j) {
            echo "[" . $j . " ";
        }
        echo "]";
        echo "<br>";
    }
    echo "]"
        ?>
    <h2>2-D associative Array</h2>
    <?PHP
    $arr = array(
        array("R-01" => "Rohan", "R-02" => "Ravi", "R-03" => "Krishna"),
        array("R-01" => 99, "R-02" => 100, "R-03" => 96),
    );
    foreach ($arr as $i) {
        foreach ($i as $k => $v) {
            echo $k . " " . $v . "  ";
        }
        echo "<br>";
    }

    ?>
</body>

</html>