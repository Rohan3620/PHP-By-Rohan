
<?php
function swap(&$a ,&$b) {
    $temp=$a;
    $a=$b;
    $b=$temp;
}

$a=10;
$b=12;
echo "a=".$a." b=".$b; 
swap($a,$b);
echo"<br>";
echo "a=".$a." b=".$b; 
?>

<?= "Hello World"; ?>
