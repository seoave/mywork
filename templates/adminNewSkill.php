<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5 dashboard">
    <div class="container">
        <article>
            <?php require __DIR__ . '/parts/dashboardMenu.php'; ?>
            <div class="row">

                <?php if ($args['title']) : ?>
                    <h1 class="text-center"><?php echo $args['title'] ?></h1>
                <?php endif; ?>

                <?php if (isset($args['skillExistsMessage'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $args['skillExistsMessage']; ?>
                    </div>
                <?php endif; ?>

            </div>
            <div class="row">

                <form id="new-skill" action="/admin/skills/new" method="post">
                    <label>
                        <input name="newSkill"
                               type="text"
                               value=""
                               class="form-control mb-3"
                               placeholder="add new skill"
                        >
                    </label>
                    <button type="submit"
                            class="btn btn-primary"
                    >
                        Create skill
                    </button>
                </form>

            </div>
        </article>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
