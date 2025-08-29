<?php
$Array = [1, 2, 3, 4, 5];
function Array_printr($Array)
{
    echo "Element of array is ";
    foreach ($Array as $num) {
        echo "" . $num . " ";
    }
}

Array_printr($Array);
echo "<br>Size of array is " . count($Array) . " ";
echo"<br>push in array at index ".array_push($Array,10)."<br>";
echo "".array_pop($Array) ."<br>";
Array_printr($Array);
echo"".array_shift($Array) ."<br>";
Array_printr($Array);
$Array = array_reverse($Array);
echo"<br>";
Array_printr($Array);
?>