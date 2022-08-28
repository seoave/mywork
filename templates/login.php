<?php require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Login</h1>
            <form id="registration" action="/login" method="post">
                <input name="loginEmail" type="email" class="form-control mb-3" placeholder="Enter your email">
                <input name="loginPassword" type="password" class="form-control mb-3" placeholder="Enter your password">
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
