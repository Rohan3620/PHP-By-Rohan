<!DOCTYPE html>
<html>
<head>
    <title>Use Nested If Else</title>
    <link rel="stylesheet" href="02.css">
</head>
<body>

<?php
echo "<hr>";
echo "<h3>Using Nested If Statements to Check Driving License Eligibility</h3>";

// Input Data
$age = 34;     // age of person
$eye = 5;      // eyesight power (>3 is good)

// Display data in table
echo "<table>
<caption>Data of Person</caption>
<tr>
<th>Given Age</th>
<th>Given Eyesight</th>
</tr>
<tr>
<td>$age</td>
<td>$eye</td>
</tr>
</table>";

// Nested If Logic
if($age < 18) {
    echo "<h4 class='info'>The person is underage and cannot apply for a license.</h4>";
} elseif($age >= 18 && $age <= 60) {
    if($eye > 3) {
        echo "<h4 class='eligible'>This person is eligible for a license.</h4>";
    } else {
        echo "<h4 class='not-eligible'>This person has weak eyesight and is not eligible.</h4>";
    }
} else {
    echo "<h4 class='info'>The person is overaged and cannot get the license.</h4>";
}
?>

</body>
</html>
