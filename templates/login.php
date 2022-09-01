<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php';
?>

<main class="pt-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center"><?php echo $args['title']; ?></h1>

            <?php if (isset($args['loginMessage'])): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $args['loginMessage']; ?>
                </div>
            <?php endif; ?>

            <form id="registration" action="/login" method="post">
                <input name="loginEmail" type="email" class="form-control mb-3" placeholder="Enter your email">
                <input name="loginPassword" type="password" class="form-control mb-3" placeholder="Enter your password">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
