<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">

            <?php if ($args['title']) : ?>
                <h1 class="text-center"><?php echo $args['title'] ?></h1>
            <?php endif; ?>

            <h3>Developer skills</h3>
            
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
