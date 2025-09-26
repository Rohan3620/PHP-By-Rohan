<?php
// Start the session
session_start();

// Check if the user is not logged in.
// If they are not logged in, redirect them to the login page.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Upload Image</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <div class="brand">
                <h1><a href="index.php" style="text-decoration:none; color:inherit;">Rohan's AI Gallery</a></h1>
                <p class="tag">AI-generated art • Prompts shown • Ethical hub</p>
            </div>
            <nav class="nav">
                <a href="index.php#gallery" class="nav-link">Gallery</a>
                <a href="index.php#about" class="nav-link">About</a>
                <a href="logout.php" class="btn-primary">Logout</a>
            </nav>
        </div>
    </header>

    <main class="container section">
        <h2 class="section-title">Upload a new image</h2>
        <p class="section-sub">Only logged-in users can upload images. Share your creation with the community!</p>
        <div class="form-container">
            <form action="handle_upload.php" method="POST" enctype="multipart/form-data">
                <label for="file">Choose Image:</label>
                <input type="file" id="file" name="image" required>
                <label for="prompt">Prompt Used:</label>
                <textarea id="prompt" name="prompt" rows="4" required></textarea>
                <label for="source">AI Source (e.g., Gemini, DALL-E):</label>
                <input type="text" id="source" name="source" required>
                <button type="submit" class="btn-primary">Upload</button>
            </form>
        </div>
    </main>
</body>
</html>
