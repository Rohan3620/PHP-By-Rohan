<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database in PHP</title>
    <link rel="stylesheet" href="21.css">
</head>
<body>

<div class="container">
    <h2>🧩 Create Database using PHP & MySQL</h2>

    <div class="output">
        <?php  
        $host = 'localhost';  
        $user = 'root';  
        $pass = '';  

        // Connect to MySQL
        $conn = mysqli_connect($host, $user, $pass);  

        if(!$conn) {  
            die("<p class='error'>❌ Could not connect: " . mysqli_connect_error() . "</p>");  
        }  
        echo "<p class='success'>✅ Connected successfully!</p>";  

        // SQL query to create database
        $sql = 'CREATE DATABASE new1';  

        if(mysqli_query($conn, $sql)) {  
            echo "<p class='success'>🎉 Database <b>new1</b> created successfully!</p>";  
        } else {  
            echo "<p class='error'>⚠️ Database creation failed: " . mysqli_error($conn) . "</p>";  
        }  

        // Close connection
        mysqli_close($conn);  
        ?>
    </div>
</div>

</body>
</html>
