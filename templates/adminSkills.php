<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5 dashboard">
    <div class="container">
        <div class="row">

            <?php if ($args['title']) : ?>
                <h1 class="text-center"><?php echo $args['title'] ?></h1>
            <?php endif; ?>

            <p><a href="/admin/skills/new" target="_blank">New skill</a></p>
        </div>
        <div class="row">
            <ul>
                <li>
                    <span class="skill-name">Skill 1</span>
                    <a href="/admin/skills/edit/1" target="_blank">Edit</a>
                    <a href="/admin/skills/remove/1">Remove</a>
                </li>
                <li>
                    <span class="skill-name">Skill 2</span>
                    <a href="/admin/skills/edit/2" target="_blank">Edit</a>
                    <a href="/admin/skills/remove/2">Remove</a>
                </li>
            </ul>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
