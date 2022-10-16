<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5 dashboard">
    <div class="container">
        <article class="">
            <?php require __DIR__ . '/parts/dashboardMenu.php'; ?>
            <div class="row">
                <?php if ($args['title']) : ?>
                    <h1 class="text-center"><?php echo $args['title'] ?></h1>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="widget">
                    <h3>
                        <a href="/admin/skills" target="_blank">
                            Developer skills
                        </a>
                    </h3>
                </div>
            </div>
        </article>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
