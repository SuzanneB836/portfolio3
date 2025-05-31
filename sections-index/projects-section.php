<?php
$projects = [
    [
        'title' => 'Portfolio Website',
        'description' => 'A sleek and responsive personal portfolio...',
        'skills' => ['HTML', 'CSS', 'JavaScript'],
        'image' => 'assets/hero_img.jpg', // your own image path
        'tags' => 'html css javascript',
        'link' => '#'
    ],
    [
        'title' => 'WordPress Theme',
        'description' => 'Custom WordPress theme with unique block styling...',
        'skills' => ['PHP', 'WordPress', 'CSS'],
        'image' => 'images/wp-theme.png',
        'tags' => 'wordpress php css',
        'link' => '#'
    ],
    [
        'title' => 'Portfolio Website',
        'description' => 'A sleek and responsive personal portfolio...',
        'skills' => ['HTML', 'CSS', 'JavaScript'],
        'image' => 'images/portfolio.png', // your own image path
        'tags' => 'html css javascript',
        'link' => '#'
    ],
    [
        'title' => 'WordPress Theme',
        'description' => 'Custom WordPress theme with unique block styling...',
        'skills' => ['PHP', 'WordPress', 'CSS'],
        'image' => 'images/wp-theme.png',
        'tags' => 'wordpress php css',
        'link' => '#'
    ],
    [
        'title' => 'Portfolio Website',
        'description' => 'A sleek and responsive personal portfolio...',
        'skills' => ['HTML', 'CSS', 'JavaScript'],
        'image' => 'images/portfolio.png', // your own image path
        'tags' => 'html css javascript',
        'link' => '#'
    ],
    [
        'title' => 'WordPress Theme',
        'description' => 'Custom WordPress theme with unique block styling...',
        'skills' => ['PHP', 'WordPress', 'CSS'],
        'image' => 'images/wp-theme.png',
        'tags' => 'wordpress php css',
        'link' => '#'
    ],
    // etc...
];

if ($isIndex) {
    $projects = array_slice($projects, 0, 3);
}
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

<div class="projects-section">
    <div class="projects-filter-toolbar" role="toolbar" aria-label="Project filter buttons">
        <button class="projects-filter-btn" data-filter="all">
            <i data-lucide="layout-grid" class="projects-filter-icon"></i>
            <span class="projects-filter-label">Show All</span>
        </button>
        <button class="projects-filter-btn" data-filter="html">
            <i data-lucide="file-code" class="projects-filter-icon"></i>
            <span class="projects-filter-label">HTML</span>
        </button>
        <button class="projects-filter-btn" data-filter="css">
            <i data-lucide="palette" class="projects-filter-icon"></i>
            <span class="projects-filter-label">CSS</span>
        </button>
        <button class="projects-filter-btn" data-filter="javascript">
            <i data-lucide="sparkles" class="projects-filter-icon"></i>
            <span class="projects-filter-label">JavaScript</span>
        </button>
        <button class="projects-filter-btn" data-filter="wordpress">
            <i data-lucide="server-cog" class="projects-filter-icon"></i>
            <span class="projects-filter-label">WordPress</span>
        </button>
        <button class="projects-filter-btn" data-filter="react">
            <i data-lucide="atom" class="projects-filter-icon"></i>
            <span class="projects-filter-label">React</span>
        </button>
    </div>

    <div class="projects-grid-container">
    <div class="projects-grid">
        <?php
        $displayedProjects = $isIndex ? array_slice($projects, 0, 3) : $projects;
        foreach ($displayedProjects as $project): ?>
            <div class="projects-card" data-tags="<?= $project['tags'] ?>">
                <div class="projects-card-image" aria-hidden="true">
                    <img src="<?= $project['image'] ?>" alt="" class="projects-card-img" />
                </div>
                <h2 class="projects-card-title"><?= $project['title'] ?></h2>
                <p class="projects-card-desc"><?= $project['description'] ?></p>
                <div class="projects-card-skills">
                    <?php foreach ($project['skills'] as $skill): ?>
                        <span class="projects-card-skill"><?= $skill ?></span>
                    <?php endforeach; ?>
                </div>
                <a href="<?= $project['link'] ?>" class="projects-card-link">
                    View Project <i data-lucide="arrow-right" class="projects-card-link-icon"></i>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
                    </div>

    <?php if ($isIndex): ?>
        <div class="projects-show-more-container">
            <a href="projects.php" class="projects-show-more-link">
                Show More Projects <i data-lucide="arrow-right" class="projects-show-more-icon"></i>
            </a>
        </div>
    <?php endif; ?>
</div>

<script src="javascript/project-filtering.js"></script>
</body>
</html>







