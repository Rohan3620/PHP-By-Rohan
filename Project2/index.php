<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$username = $isLoggedIn ? $_SESSION['username'] : '';
$profilePhoto = $isLoggedIn ? 'images/default-profile.png' : ''; // replace with actual user photo path
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>AI Art Portfolio — Rohan Mishra</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
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
            <a href="#gallery" class="nav-link">Gallery</a>
            <a href="#about" class="nav-link">About</a>

            <?php if ($isLoggedIn): ?>
                <!-- Profile button with dropdown -->
                <div class="profile-dropdown">
                    <img src="<?php echo $profilePhoto; ?>" alt="Profile" class="profile-btn" onclick="toggleDropdown()">
                    <div id="dropdownMenu" class="dropdown-menu">
                        <p><strong><?php echo $username; ?></strong></p>
                        <hr>
                        <a href="profile.php">Favorites</a>
                        <a href="profile.php">Downloads</a>
                        <a href="profile.php">Profile Info</a>
                        <a href="logout.php">Logout</a>
                    </div>
                </div>
            <?php else: ?>
                <!-- Login button -->
                <a href="login.php" class="btn-primary">Login</a>
            <?php endif; ?>
        </nav>
    </div>
</header>
    

<main>
    <section class="hero">
        <div class="container">
            <div class="hero-grid">
                <div>
                    <h2>Showcase your AI creativity</h2>
                    <p class="lead">All images on this site are AI-generated. Each card shows the prompt and source so others can learn and remix responsibly.</p>
                    <div class="hero-ctas">
                        <!-- This button is now visible to everyone, but the linked page will handle the login check -->
                        <a href="upload.php" class="btn-primary">Upload an Image</a>
                        <a href="#gallery" class="btn-ghost">View Gallery</a>
                    </div>
                </div>
                <div class="hero-preview">
                    <div class="preview-card">
                        <img src="https://placehold.co/400x500/A8B8FF/000?text=AI+Art" alt="Sample AI art preview">
                        <div class="preview-meta">
                            <strong>Prompt:</strong>
                            <p class="small">"A surreal cityscape at dusk, neon reflections, cinematic atmosphere"</p>
                            <span class="chip">Gemini</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="container section">
        <h3 class="section-title">Gallery</h3>
        <p class="section-sub">Click any image to open full-size (you can add lightbox later). Prompts and sources are shown for transparency.</p>

        <div class="grid gallery-grid">
            <!-- Example card: copy this block to add more -->
            <article class="card">
                <div class="card-media">
                    <img src="https://placehold.co/400x500/A8B8FF/000?text=AI+Art+1" alt="AI art 1">
                </div>
                <div class="card-body">
                    <div class="card-top">
                        <span class="chip">Gemini</span>
                        <span class="time">2025-09-10</span>
                    </div>
                    <p class="prompt"><strong>Prompt:</strong> "A surreal cityscape at dusk, neon reflections, cinematic atmosphere"</p>
                    <p class="uploader">By <strong>Rohan</strong></p>
                </div>
            </article>

            <article class="card">
                <div class="card-media">
                    <img src="https://placehold.co/400x500/F8B6D8/000?text=AI+Art+2" alt="AI art 2">
                </div>
                <div class="card-body">
                    <div class="card-top">
                        <span class="chip">Gemini</span>
                        <span class="time">2025-09-08</span>
                    </div>
                    <p class="prompt"><strong>Prompt:</strong> "Vintage poster style — futuristic train, bold color blocks"</p>
                    <p class="uploader">By <strong>Anonymous</strong></p>
                </div>
            </article>

            <!-- Add more cards as needed -->
        </div>
    </section>

    <section id="about" class="container section">
        <h3 class="section-title">About this project</h3>
        <p>This site is a personal showcase for AI-generated art. Every upload includes the prompt and source model (e.g., Gemini). Respect the licenses of the model used before commercializing any image.</p>
        <ul class="bullets">
            <li>Prompt transparency — learn how images are made.</li>
            <li>Ethical uploads — uploader confirms rights & model terms.</li>
            <li>Community-ready — next: comments, remix, ratings.</li>
        </ul>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>© <strong>Rohan Mishra</strong> — AI Art Portfolio • Built with HTML/CSS/PHP</p>
        <p class="small">Tip: Add server-side checks in upload.php to validate file types and store prompts in the database.</p>
    </div>
</footer>

</body>
</html>

<script>
function toggleDropdown() {
    const menu = document.getElementById('dropdownMenu');
    menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
}

// Optional: close dropdown when clicking outside
window.onclick = function(event) {
    if (!event.target.matches('.profile-btn')) {
        const dropdown = document.getElementById('dropdownMenu');
        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        }
    }
};
</script>
