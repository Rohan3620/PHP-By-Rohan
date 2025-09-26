<head>
    <title>This is typecasting</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        body {
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            margin: 0;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 40px 60px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .box:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
        }

        .box h1 {
            margin: 0 0 15px 0;
            font-size: 36px;
            color: #333;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.2);
        }

        .box h3 {
            margin: 15px 0;
            font-size: 24px;
            color: #555;
        }

        .box p, .box code {
            font-size: 18px;
            color: #444;
            line-height: 1.6;
            word-break: break-word;
        }
    </style>
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

            // ". <br>But addition of a+e is " . ($a + $e) .
            // " <br>which is " . gettype($a + $e) .
            // ". It is implicit.";
            ?>

            <h3>Explicit type casting</h3>
            <?PHP
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