<!-- Write a program to implement Array-pad(), array_slice(),  -->
<!-- array_splice(), list() functions. (use foreach wherever  -->
<!-- applicable)  -->

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
<style>



body {
    background: linear-gradient(135deg, #dfe9f3, #ffffff);
    font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 40px 15%;
    display: flex;
    flex-direction: column;
    gap: 40px;
    align-items: center;
}

/* Box styling */
.box {
    background: rgba(255, 255, 255, 0.15);
    border-radius: 20px;
    padding: 40px 50px;
    backdrop-filter: blur(12px);
    -webkit-backdrop-filter: blur(12px);
    border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15),
                inset 0 1px 3px rgba(255, 255, 255, 0.3);
    color: #2c2c2c;
    font-size: 22px;
    font-weight: 600;
    text-align: center;
    transition: all 0.4s ease;
    width: 100%;
    max-width: 700px;
}

/* Hover animation */
.box:hover {
    transform: translateY(-10px) scale(1.02);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.2),
                inset 0 2px 6px rgba(255, 255, 255, 0.3);
}

h2 {
    font-size: 26px;
    font-weight: 700;
    color: #222;
    margin-bottom: 15px;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-bottom: 2px solid #6a11cb;
    display: inline-block;
    padding-bottom: 6px;
}

.Section {
    font-size: 18px;
    font-weight: normal;
    text-align: left;
    color: #333;
    background: rgba(255, 255, 255, 0.7);
    padding: 20px;
    border-radius: 12px;
    margin-top: 15px;
    word-wrap: break-word;
}

</style>  
</head>

<body>
    <div class='box'>
        <?php
        $a = [1, 2];
        echo "<div class='Section'>";
        echo "<h2>Array Element after array_pad</h2><br>";
        print_r(array_pad($a, 5, "0"));
        echo "</div>";
        ?>
    </div>

    <div class='box'>
        <?php
        $a = [1, 2, 3, 4, 5];
        echo "<div class='Section'>";
        echo "<h2>Array Element after array_slice</h2><br>";
        print_r(array_slice($a, 1, 3));
        echo "</div>";
        ?>
    </div>

    <div class='box'>
        <?php
        $a = [1, 2, 3, 4, 5];
        echo "<div class='Section'>";
        echo "<h2>Array Element after array_splice</h2><br>";
        array_splice($a, 1, 2, ["Rohan", "Krishna"]);
        print_r($a);
        echo "</div>";
        ?>
    </div>

    <div class='box'>
        <?php
        $info = ["Rohan", "Mishra", 21];
        echo "<div class='Section'>";
        echo "<h2>Using list() function</h2><br>";
        list($fname, $lname, $age) = $info;
        echo "First Name: $fname <br> Last Name: $lname <br> Age: $age";
        echo "</div>";
        ?>
    </div>

</body>

</html>
