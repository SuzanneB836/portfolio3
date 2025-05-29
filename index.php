<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzanne Boon</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'header.php'; ?>

    <div class="site-index">
        <div class="full-container">
            <div class="content-container">
                <div class="hero-section">
                    <div class="text">
                        <div id="text-name">
                            <h1>
                                <span class="hmsg-cont">
                                    <span id="helloMessage">Hi</span>
                                </span>
                                I am <span class="name">Suzanne Boon</span>
                            </h1>
                        </div>
                        <div class="text-desc">
                            Front-end Developer
                        </div>
                        <div class="text-desc2">
                            Turning designs into experiences, then asking: What’s next?
                        </div>
                        <div class="cta-buttons">
                            <div class="cta-1">
                                <a href="project.php" class="cta-btn">View Projects</a>
                            </div>
                            <div class="cta-1">
                                <a href="contact.php" class="btn">Contact Me</a>
                            </div>
                        </div>
                    </div>
                    <div class="image">
                        <div class="image-img">
                            <img src="assets/hero_img.jpg" alt="Suzanne Boon" class="hero-img">
                        </div>
                    </div>
                </div>
                <div class="skills-section">
                    <!-- Skills content here -->
                </div>
                <div class="exp-section">
                    <!-- Experience content here -->
                </div>
                <div class="projects-section">
                    
                </div>
            </div>
        </div>
    </div>

    <?php include 'cookie-consent.php'; ?>
    <?php include 'footer.php'; ?>

    <!-- Load JavaScript files at the end of the body -->
    <script src="script.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>