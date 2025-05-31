<?php
$isIndex = false;
?>

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

<div class="site-projects">
    <div class="full-container">
        <div class="content-container">
            <?php
                include 'sections-index/projects-section.php';
            ?>
        </div>
    </div>
</div>

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