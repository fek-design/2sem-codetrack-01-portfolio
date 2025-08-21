<?php
/** @var \App\Template $this */
/** @var string|null $success */
/** @var array<string, array<string>> $errors */
/** @var \App\Http\Request $request */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $this->section('title') ?> - My Portfolio</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<header class="navigation-bar">
    <div class="container d-flex col-auto">

        <a href="/" class="text-white text-center font-bold">FEKDESIGN</a>
    </div>

    <div>
        <nav class="main-nav">

            <ul>
                <li>
                    <a href="/about">
                        ABOUT
                    </a>
                </li>
                <li>
                    <a href="/projects">
                        PROJECTS
                    </a>
                </li>
                <li>
                    <a href="/skills">
                        SKILLS
                    </a>
                </li>
                <li>
                    <a href="/contact">
                        CONTACTS
                    </a>
                </li>
                <li>
                    <a href="/test">
                        test
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

    <div class="alerts">
        <?php if (!empty($success)): ?>
            <div class="alert alert-success">
                <?= htmlspecialchars($success) ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($errors) && isset($errors['general'])): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors['general'] as $error): ?>
                        <li>
                            <?= htmlspecialchars($error) ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <main>
        <?php $this->section('content') ?>
    </main>

    <footer>
        <div class="footer-content">
            <p class="copyright">
                &copy; <?= date('Y') ?>
                FekDesign. All rights reserved.
            </p>
        </div>
    </footer>

</body>
</html>
