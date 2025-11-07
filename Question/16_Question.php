<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling in PHP</title>
    <link rel="stylesheet" href="16.css">
</head>
<body>
    <div class="container">
        <?php
        echo "<h2>📂 PHP File and Directory Handling Demo</h2>";

        // Step 1: Create a new directory
        $dir = "example_folder";
        if (!is_dir($dir)) {               
            mkdir($dir);                   
            echo "<p class='success'>✅ Directory '<b>$dir</b>' created successfully.</p>";
        } else {
            echo "<p class='info'>ℹ️ Directory '<b>$dir</b>' already exists.</p>";
        }

        // Step 2: Create a new file inside that directory
        $filename = $dir . "/example.txt";
        $file = fopen($filename, "w") or die("<p class='error'>❌ Unable to open file!</p>");
        fwrite($file, "Welcome to PHP File Handling!\nThis is an example text file.");
        fclose($file);
        echo "<p class='success'>📝 File '<b>example.txt</b>' created inside '<b>$dir</b>'.</p>";

        // Step 3: Copy the file
        $copyFile = $dir . "/copy_example.txt";
        if (copy($filename, $copyFile)) {
            echo "<p class='success'>📄 File copied as '<b>copy_example.txt</b>'.</p>";
        }

        // Step 4: Rename the copied file
        $renameFile = $dir . "/renamed_example.txt";
        if (rename($copyFile, $renameFile)) {
            echo "<p class='success'>✏️ File renamed to '<b>renamed_example.txt</b>'.</p>";
        }

        // Step 5: Display all files in the directory
        echo "<h3>📁 Files in '<b>$dir</b>':</h3>";
        echo "<div class='file-list'>";
        $files = scandir($dir);
        foreach ($files as $f) {
            if ($f != "." && $f != "..") {
                echo "<span class='file-item'>$f</span><br>";
            }
        }
        echo "</div>";

        // Step 6: Read and display contents of the file
        echo "<h3>📜 Contents of '<b>example.txt</b>':</h3>";
        $read = file_get_contents($filename);
        echo "<pre class='file-content'>" . htmlspecialchars($read) . "</pre>";

        // Step 7: Delete renamed file
        if (unlink($renameFile)) {
            echo "<p class='success'>🗑️ File '<b>renamed_example.txt</b>' deleted successfully.</p>";
        }

        // Step 8: Remove directory after deleting files
        if (unlink($filename)) { // remove example.txt first
            if (rmdir($dir)) {
                echo "<p class='success'>✅ Directory '<b>$dir</b>' removed successfully.</p>";
            } else {
                echo "<p class='error'>❌ Directory not empty or cannot be removed.</p>";
            }
        }
        ?>
    </div>
</body>
</html>
