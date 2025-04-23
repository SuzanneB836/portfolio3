<?php
// Start the session (if you need it for other things)
session_start();

// Check if dark mode cookie exists and is set to '1'
// This runs when the page first loads
$darkMode = isset($_COOKIE['dark_mode']) && $_COOKIE['dark_mode'] === '1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<!-- Add dark-mode class if cookie says we're in dark mode -->
<body class="<?php echo $darkMode ? 'dark-mode' : ''; ?>">

    <header class="site-header">
        <nav>
            <h1>My Portfolio</h1>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Work</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <button id="theme-toggle">
                <!-- Show moon icon if dark mode, sun if light -->
                <i data-lucide="<?php echo $darkMode ? 'Moon' : 'Sun'; ?>" class="theme-icon"></i>
            </button>
        </nav>
    </header>

    <!-- Load JavaScript files at the end of the body -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>

</html>