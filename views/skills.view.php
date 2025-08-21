<?php
/** @var \App\Template $this */
/** @var array $skills */

$this->extend('layout');
?>

<?php $this->start('title', 'My Skills') ?>

<section class="page-header">
    <div class="container">
        <h1 class="page-heading">
            My Skills
        </h1>
    </div>
</section>

<section class="skills-section">
    <div class="container">
        <?php foreach ($skills as $category => $list): ?>
            <div class="skill-category">
                <h2><?= htmlspecialchars($category) ?></h2>
                <ul class="skill-list">
                    <?php foreach ($list as $skill): ?>
                        <li><?= htmlspecialchars($skill) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</section>
