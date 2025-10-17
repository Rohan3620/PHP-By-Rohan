<html>

<head>
    <title>This is typecasting</title>
    <style>
        body {
            background-color: cyan;
            margin: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .box {
            background: lightblue;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 20px;
            font-weight: bold;
            border: 2px solid black;
            padding: 20px;
        }

        .box h1 {
            margin: 0 0 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="box">
            <h2>DataType</h2>
            <?php
            echo "<h3>1. Scalar Types</h3>";
            $a = 1;
            echo "datatype of " . $a . " is " . gettype($a) . "<br>";

            $b = 1.5;
            echo "datatype of " . $b . " is " . gettype($b) . "<br>";

            $c = "1";
            echo "datatype of " . $c . " is " . gettype($c) . "<br>";

            $d = true;
            echo "datatype of " . $c . " is " . gettype($c) . "<br>";

            echo "<h3>2. Compound Types</h3>";

            $e = [1, 2, 3, 4];
            echo "datatype of " . print_r($d, true) . " is " . gettype($e) . "<br>";


            class Demo
            {
                public $x = 5;
            }
            $f = new Demo();
            echo "datatype of object is " . gettype($f) . "<br><br>";

            $g = null;
            echo "datatype of " . $g . " is " . gettype($g) . "<br>";
            echo "<h3>3. Special Type</h3>";

            $h = fopen("php://memory", "r");
            echo "datatype of file is " . gettype($h) . "<br>";
            fclose($h);



                 
            ?>
        </div>
    </div>
</body>

</html>