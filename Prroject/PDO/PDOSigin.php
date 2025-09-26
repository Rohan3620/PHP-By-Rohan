<?php
$insert = false;

// Database connection details
$server = "localhost";   
$dbusername = "root";    
$dbpassword = "";        
$database = "PARIVAHAN"; 

try {
    // Create PDO connection
    $con = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $dbusername, $dbpassword);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $city = $_POST["city"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];

        $sql = "INSERT INTO signin (name, city, username, password, time, email) 
                VALUES (:name, :city, :username, :password, CURRENT_TIMESTAMP, :email)";
        
        $stmt = $con->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':email', $email);

        if ($stmt->execute()) {
            $insert = true;
            header("Location: main_Server.php");
            exit();
        } else {
            echo "Something went wrong!";
        }
    }
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
