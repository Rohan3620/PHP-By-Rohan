<?php
session_start();
require_once 'db.php';

// Check if the user is logged in. If not, redirect to the login page.
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

// Get the user's ID and username from the session
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// Fetch images uploaded by the current user
$stmt = $conn->prepare("SELECT prompt, image_path FROM images WHERE user_id = ? ORDER BY uploaded_at DESC");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - <?php echo htmlspecialchars($username); ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="site-header">
        <div class="container header-inner">
            <h1><a href="index.php" style="text-decoration:none; color:inherit;">AI Art Gallery</a></h1>
            <nav class="nav">
                <a href="index.php">Home</a>
                <a href="profile.php">Profile</a>
                <a href="upload.php" class="btn-primary">Upload</a>
                <a href="logout.php" class="btn-secondary">Logout</a>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2 style="text-align: center; margin-top: 40px;">Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
        <h3 style="text-align: center; margin-bottom: 30px;">Your Uploads</h3>
        
        <div class="grid">
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo '<article class="card">';
                    echo '    <div class="card-media">';
                    echo '        <img src="' . htmlspecialchars($row['image_path']) . '" alt="Your uploaded art">';
                    echo '    </div>';
                    echo '    <div class="card-body">';
                    echo '        <p><strong>Prompt:</strong> ' . htmlspecialchars($row['prompt']) . '</p>';
                    echo '    </div>';
                    echo '</article>';
                }
            } else {
                echo "<p style='text-align:center;'>You have not uploaded any images yet.</p>";
            }
            $stmt->close();
            $conn->close();
            ?>
        </div>
    </div>

    <footer class="site-footer">
        <div class="container">
            <p>&copy; AI Art Gallery</p>
        </div>
    </footer>
</body>
</html>
