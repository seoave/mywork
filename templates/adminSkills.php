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

            <?php if (! $args['skills']):
                echo '<p>No skills. Create it</p>';
            else: ?>
                <ul>
                    <?php foreach ($args['skills'] as $skill): ?>
                        <li>
                            <span class="skill-name"><?php echo $skill['skillName']; ?></span>
                            <a href="/admin/skills/edit/<?php echo $skill['id']; ?>" target="_blank">Edit</a>
                            <a href="/admin/skills/remove/<?php echo $skill['id']; ?>">Remove</a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
