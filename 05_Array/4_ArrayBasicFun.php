<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 600px;
            margin: auto;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .output {
            background-color: #e7f3ff;
            border-left: 5px solid #2196F3;
            padding: 10px;
            margin: 10px 0;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP Array Example</h1>
        <div class="output">
            <?php
            $foods = ["Apple", "Orange", "Banana", "Coconut"];
            foreach($foods as $item){
                echo $item . " ";
            }
            echo "<br>";
            echo "Size of array is " . sizeof($foods) . "<br>";
            echo "Size of array is " . count($foods) . "<br>";

            $num = range(1,5);
            echo "Original Number Array: ";
            print_r($num);
            echo "<br>";

            $num = array_pad($num, 10, 1);
            echo "Padded Number Array: ";
            print_r($num);
            ?>
        </div>
    </div>
</body>
</html>
