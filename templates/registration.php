<?php require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Registration</h1>
            <form id="registration" action="">
                <input type="text" class="form-control mb-3" placeholder="Enter your login name">
                <input type="email" class="form-control mb-3" placeholder="Enter your email">
                <input type="password" class="form-control mb-3" placeholder="Enter your password">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="select-role" id="select-candidate" checked value="candidate">
                    <label class="form-check-label" for="select-candidate">
                        Candidate
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="select-role" id="select-hr" value="hr">
                    <label class="form-check-label" for="select-hr">
                        Recruiter
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
