<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Append Example</title>
    <link rel="stylesheet" href="18.css">
</head>
<body>
    <div class="container">
        <h2>📄 PHP File Append Demo</h2>

        <div class="output">
            <?php
            $filename = "example.txt";  // existing file name

            // Step 1: Check if the file exists
            if (file_exists($filename)) {

                // Step 2: Open the file in append mode to add new content
                $file = fopen($filename, "a");

                // Step 3: Define new content to add
                $newContent = "\nThis line is newly added to the existing file.";

                // Step 4: Write the new content into the file
                fwrite($file, $newContent);

                // Step 5: Close the file
                fclose($file);

                echo "<p class='success'>✅ File content modified successfully!</p>";

                // Step 6: Display updated file content
                echo "<h3>📜 Updated File Content:</h3>";
                echo "<pre class='file-content'>";
                readfile($filename);  // directly reads and prints the file content
                echo "</pre>";
            } else {
                echo "<p class='error'>❌ File does not exist!</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
