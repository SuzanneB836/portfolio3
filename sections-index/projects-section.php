<?php
require __DIR__ . '/../projects-data.php';

$defaultProjectLimit = 3;
$projectLimit = $isIndex ? $defaultProjectLimit : count($projects);
?>

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
            <?php foreach ($projects as $index => $project): 
                $hidden = $isIndex && $index >= $defaultProjectLimit ? 'style="display: none;"' : '';
            ?>
                <div class="projects-card" data-tags="<?= $project['tags'] ?>" <?= $hidden ?>>
                    <div class="projects-card-image" aria-hidden="true">
                        <img src="<?= $project['image'] ?>" alt="" class="projects-card-img" />
                    </div>
                    <h2 class="projects-card-title"><?= $project['title'] ?></h2>
                    <p class="projects-card-desc"><?= $project['summary'] ?></p>
                    <div class="projects-card-skills">
                        <?php foreach ($project['skills'] as $skill): ?>
                            <span class="projects-card-skill"><?= $skill ?></span>
                        <?php endforeach; ?>
                    </div>
                    <a href="single-project.php?project_id=<?= urlencode($project['project_id']) ?>" class="projects-card-link">
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

<script>
window.projectsData = {
    allProjects: <?php echo json_encode($projects); ?>,
    isIndex: <?php echo $isIndex ? 'true' : 'false'; ?>,
    defaultLimit: <?php echo $defaultProjectLimit; ?>
};
</script>

<script src="javascript/project-filtering.js"></script>
<script src="javascript/responsive-projects.js"></script>