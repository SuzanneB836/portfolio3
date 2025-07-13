<?php

require 'projects-data.php'; // path depending on where your single-project.php is

$slug = isset($_GET['slug']) ? $_GET['slug'] : '';

$project = null;
foreach ($projects as $p) {
    if ($p['slug'] === $slug) {
        $project = $p;
        break;
    }
}

if (!$project) {
    header("Location: projects.php");
    exit;
}

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

<div class="site-project-detail">
    <div class="full-container">
        <div class="content-container">
            
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