<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Creation</title>
    <link rel="stylesheet" href="15.css">
</head>
<body>
    <div class="container">
        <h2>📁 PHP File Handling: Create & Write</h2>
        <div class="output">
            <?php
            // File name to create
            $filename = "myfile.txt";

            // fopen() is used to open/create a file
            // "w" mode → write mode (creates file if not exists, overwrites if exists)
            $file = fopen($filename, "w");

            if ($file) {
                echo "<p class='success'>✅ File '<b>$filename</b>' created successfully!</p>";

                // Write some text into the file
                fwrite($file, "Hello, this is my first file created using PHP.\n");
                fwrite($file, "PHP makes file handling easy!!\n");

                // Close the file after writing
                fclose($file);
                echo "<p class='success'>✍️ Data written and file closed successfully!</p>";
            } else {
                echo "<p class='error'>❌ Failed to create file!</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
