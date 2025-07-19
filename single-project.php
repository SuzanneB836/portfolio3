<?php

require 'projects-data.php'; // path depending on where your single-project.php is


$project_id = isset($_GET['project_id']) ? $_GET['project_id'] : '';


$project = null;
foreach ($projects as $p) {
    if ($p['project_id'] === $project_id) {
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
            <div class="image">
                <img src="<?php echo $project['image']; ?>" alt="<?php echo $project['title']; ?>">
            </div>
            <div class="title">
                <h1><?php echo $project['title']; ?></h1>
            </div>
            <div class="skills">
                <?php foreach ($project['skills'] as $skill): ?>
                    <?php $filter = strtolower($skill); ?>
                    <a class="skill" href="projects.php?filter=<?php echo urlencode($filter); ?>"><?php echo $skill; ?></a>
                <?php endforeach; ?>
            </div>
            <div class="summary">
                <p><?php echo $project['summary']; ?></p>
            </div>
            <div class="description">
                <p><?php echo $project['description']; ?></p>
        </div>
        <div class="live">
            <a href="<?php echo $project['link']; ?>" target="_blank" class="view-live">
                <i class="icon" data-lucide="link"></i> View live
            </a>
        </div>
        <div class="return">
            <a href="projects.php" class="button">
                <i class="icon" data-lucide="undo"></i> Back to Projects
            </a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
    

    <!-- Load JavaScript files at the end of the body -->
    <script src="javascript/script.js"></script>
    <script src="javascript/animation.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        // Initialize Lucide icons
        lucide.createIcons();
    </script>
</body>
</html>