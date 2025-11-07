<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Example</title>
    <link rel="stylesheet" href="06.css">
</head>

<body>
    <div class="container">
        <h1>PHP Array Example</h1>
        <div class="output">
            <?php
            $foods = ["Apple", "Orange", "Banana", "Coconut"];
            echo "Original Foods Array: ";
            foreach ($foods as $item) {
                echo $item . " ";
            }
            echo "<br>";
            echo "Size of array: " . count($foods) . "<br><br>";

            $num = range(1, 5);
            echo "Original Number Array: ";
            print_r($num);
            echo "<br>";

            $num_padded = array_pad($num, 10, 0);
            echo "Padded Number Array: ";
            print_r($num_padded);
            echo "<br><br>";

            $people = ["Tom", "Dick", "Harriet", "Alice"];
            echo "Original People Array: ";
            print_r($people);
            echo "<br>";

            $slice = array_slice($people, 1, 2);
            echo "Sliced Array (index 1, length 2): ";
            print_r($slice);
            echo "<br><br>";

            $splice_people = $people;
            array_splice($splice_people, 1, 2, ["Bob", "Charlie"]);
            echo "After array_splice (replacing 2 elements at index 1): ";
            print_r($splice_people);
            echo "<br><br>";

            $fruits = ["Mango", "Papaya", "Pineapple"];
            list($first, $second, $third) = $fruits;
            echo "Using list():<br>";
            echo "First fruit: $first<br>";
            echo "Second fruit: $second<br>";
            echo "Third fruit: $third<br><br>";

            shuffle($foods);
            echo "Shuffled Foods Array: ";
            print_r($foods);
            echo "<br>";
            echo "Last element using end(): " . end($foods) . "<br>";
            ?>
        </div>
    </div>
</body>

</html>
