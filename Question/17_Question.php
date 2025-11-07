<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Write and Read Demo</title>
    <link rel="stylesheet" href="17.css">
</head>
<body>
    <div class="container">
        <h2>📁 PHP File Handling: Write and Read</h2>
        <div class="output">
            <?php
            // Step 1: Create or open a file in write mode
            $file = fopen("demo.txt", "w");

            // Step 2: Write content into the file
            $content = "Hello Students!\nWelcome to PHP File Handling.\nEnjoy Learning!";
            fwrite($file, $content);

            // Step 3: Close the file after writing
            fclose($file);
            echo "<p class='success'>✅ File '<b>demo.txt</b>' created successfully and data written.</p>";

            // Step 4: Open the same file in read mode
            $file = fopen("demo.txt", "r");

            // Step 5: Read and display the file contents
            echo "<h3>📜 Contents of '<b>demo.txt</b>':</h3>";
            echo "<div class='file-content'>";
            while (!feof($file)) { // feof() checks for end of file
                echo nl2br(fgets($file)); // fgets() reads one line at a time
            }
            echo "</div>";

            // Step 6: Close the file after reading
            fclose($file);
            ?>
        </div>
    </div>
</body>
</html>
