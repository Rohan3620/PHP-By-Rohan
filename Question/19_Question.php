<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload & Download in PHP</title>
    <link rel="stylesheet" href="19.css">
</head>
<body>
    <div class="container">
        <h2>📤 Upload and 📥 Download Files in PHP</h2>
        <hr>

        <!-- File Upload Form -->
        <form action="" method="post" enctype="multipart/form-data" class="upload-form">
            <label><b>Select File to Upload:</b></label><br><br>
            <input type="file" name="myfile" required><br><br>
            <input type="submit" name="upload" value="Upload File" class="btn">
        </form>
        <hr>

        <div class="output">
            <?php
            $uploadDir = "uploads/";

         
            if (isset($_POST['upload'])) {
                $fileName = $_FILES['myfile']['name'];
                $fileTmp = $_FILES['myfile']['tmp_name'];

                if (move_uploaded_file($fileTmp, $uploadDir . $fileName)) {
                    echo "<p class='success'>✅ File uploaded successfully: <b>$fileName</b></p>";
                } else {
                    echo "<p class='error'>❌ File upload failed!</p>";
                }
            }

         
            echo "<h3>📂 Available Files for Download:</h3>";

            if (is_dir($uploadDir)) {
                $files = scandir($uploadDir);
                echo "<div class='file-list'>";
                foreach ($files as $file) {
                    if ($file != "." && $file != "..") {
                        echo "<a href='?download=$file' class='file-link'>📄 $file</a><br>";
                    }
                }
                echo "</div>";
            } else {
                echo "<p class='error'>❌ Uploads folder not found!</p>";
            }

        
            if (isset($_GET['download'])) {
                $file = $uploadDir . $_GET['download'];

                if (file_exists($file)) {
                    header('Content-Description: File Transfer');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . basename($file) . '"');
                    header('Content-Length: ' . filesize($file));
                    readfile($file);
                    exit;
                } else {
                    echo "<p class='error'>❌ File not found!</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
