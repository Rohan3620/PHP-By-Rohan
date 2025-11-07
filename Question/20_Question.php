<?php
// Folder to store uploaded images
$targetDir = "images/";

// ✅ Create the folder if not exists
if (!is_dir($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Check if upload button is clicked
if (isset($_POST['upload'])) {
    $fileName = $_FILES['image']['name'];
    $tempName = $_FILES['image']['tmp_name'];
    $targetFile = $targetDir . basename($fileName);

    // Check if uploaded file is an image
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($tempName, $targetFile)) {
            echo "<p style='color:green;'>✅ Image uploaded successfully!</p>";
        } else {
            echo "<p style='color:red;'>❌ Error uploading image!</p>";
        }
    } else {
        echo "<p style='color:red;'>⚠️ Only JPG, JPEG, PNG, and GIF files are allowed!</p>";
    }
}
?>

<!-- HTML Form for Uploading Image -->
<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display Image in PHP</title>
    <link rel="stylesheet" href="20.css">
</head>
<body style="font-family:Arial; text-align:center;">
    <h2>🖼️ Upload and Display Image in PHP</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" required>
        <input type="submit" name="upload" value="Upload Image">
    </form>

    <hr>

    <h3>📸 Uploaded Images:</h3>
    <?php
    // Display all images in the folder
    $images = scandir($targetDir);
    foreach ($images as $img) {
        if ($img != "." && $img != "..") {
            echo "<img src='$targetDir$img' width='200' height='150' style='margin:10px; border:1px solid gray;'>";
        }
    }
    ?>
</body>
</html>
