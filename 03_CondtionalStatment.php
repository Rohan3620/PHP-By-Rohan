<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color:cyan;
        margin:10%;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
       <h1 style="text-align: center;">Let's learn Conditional Statements </h1>
        <form method="get">
            <label for="age">Enter age </label>
            <input type="number" name="age">
            <input type="submit">
        </form>
        <?php
        $age=$_GET['age'];
        if ($age > 0 && $age < 13) {
        echo "You are a Child";
    } 
    else if ($age >= 13 && $age < 20) {
        echo "You are a Teenager";
    } 
    else if ($age >= 20 && $age < 60) {
        echo "You are an Adult";
    } 
    else if ($age >= 60 && $age < 100) {
        echo "You are a Senior Citizen";
    } 
    else {
        echo "Invalid age";
    } 
    ?>

    </div>
</body>
</html>