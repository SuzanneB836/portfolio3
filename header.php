<?php
// Start the session (if you need it for other things)
session_start();

// Check if dark mode cookie exists and is set to '1' only if consent was given
$darkMode = isset($_COOKIE['cookie_consent']) && 
            $_COOKIE['cookie_consent'] === 'true' && 
            isset($_COOKIE['dark_mode']) && 
            $_COOKIE['dark_mode'] === '1';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body class="<?php echo $darkMode ? 'dark-mode' : ''; ?>">

    <header class="site-header">
        <nav>
            <div class="nav-links">
                <div class="nl-cont">
                    <a href="index.php" class="nav-link">
                    <div class="nav-icon-wrapper">
                        <i data-lucide="Home" class="nav-icon"></i>
                    </div>
                    <div class="nav-text-wrapper">
                        Home
                    </div>
                </a>
                <a href="#" class="nav-link">
                    <div class="nav-icon-wrapper">
                        <i data-lucide="Briefcase" class="nav-icon"></i>
                    </div>
                    <div class="nav-text-wrapper">
                        Work
                    </div>
                </a>
                <a href="#" class="nav-link">
                    <div class="nav-icon-wrapper">
                        <i data-lucide="Mail" class="nav-icon"></i>
                    </div>
                    <div class="nav-text-wrapper">
                        Contact
                    </div>
                </a>
                </div>
                <button id="theme-toggle">
                  <!-- Show moon icon if dark mode, sun if light -->
                <i data-lucide="<?php echo $darkMode ? 'Moon' : 'Sun'; ?>" class="theme-icon"></i>
            </button>
            </div>
            
        </nav>
    </header>
</body>

</html>