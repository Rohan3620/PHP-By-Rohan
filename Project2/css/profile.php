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
    <title>My Profile</title>
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
        <h2 class="section-title">My Profile</h2>
        <p class="section-sub">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
        
        <!-- Profile sections for favorites, downloads, etc. -->
        <h3 id="favorites" class="section-title">My Favorites</h3>
        <p>This section will show the images you have favorited.</p>

        <h3 id="downloads" class="section-title">My Downloads</h3>
        <p>This section will show a history of your downloads.</p>

        <h3 id="info" class="section-title">Profile Info</h3>
        <p>This section will show your personal information.</p>

    </main>
</body>
</html>
