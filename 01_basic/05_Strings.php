<?php
$str = "Rohan is best ";
echo $str . "<br>";

$len = strlen($str);
echo "Length of string is " . $len;

echo "<br>The number of words in the string is " . str_word_count($str);

echo "<br>The reversed String is " . strrev($str);

echo "<br>The search for 'is' in this string is " . strpos($str, "is");

echo "<br>The replace for 'is' with can " . str_replace("is", "can", $str);

?>
