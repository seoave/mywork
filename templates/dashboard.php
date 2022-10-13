<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5 dashboard">
    <div class="container">
        <div class="row">

            <?php if ($args['title']) : ?>
                <h1 class="text-center"><?php echo $args['title'] ?></h1>
            <?php endif; ?>
        </div>
        <div class="row">
            <div class="widget">
                <h3>Developer skills</h3>
                <ul>
                    <li>PHP</li>
                    <li>CSS</li>
                </ul>
                <p><a href="/admin/skills" target="_blank">Edit</a></p>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
