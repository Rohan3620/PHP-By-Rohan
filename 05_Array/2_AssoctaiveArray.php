<html>

<head>
    <title>Associative array</title>
</head>

<body>
    <?PHP
    $arr = array(
        01 => "Rohan",
        02 => "Krishna",
        03 => "Ravi",
        04 => "Ram"
    );
     print_r($arr);
     echo"<br>";
     foreach ($arr as $key=> $val){
        echo $key." ".$val."<br>";
     }
    ?>
</body>

</html>