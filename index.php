<?php
$isIndex = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/logo.png">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="site-index">
        <div class="full-container">
            <div class="content-container">
                <div class="hero-include">
                    <?php
                        include 'sections-index/hero-section.php';
                    ?>
                </div>
                <div class="skills-include">
                    <?php
                        include 'sections-index/skills-section.php';
                    ?>
                </div>
                <div class="exp-include">
                    <?php
                        include 'sections-index/exp-section.php';
                    ?>
                </div>
                <div class="projects-include">
                    <?php
                        include 'sections-index/projects-section.php';
                    ?>
                </div>
            </div>
        </div>
    </div>

    <?php include 'cookie-consent.php'; ?>
    <?php include 'footer.php'; ?>

    <!-- Load JavaScript files at the end of the body -->
    <script src="javascript/script.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>