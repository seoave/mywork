<?php require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <h1 class="text-center">Registration</h1>
            <form id="registration" action="/registration" method="post">
                <input name="registrationName" type="text" class="form-control mb-3" placeholder="Enter your name">
                <input name="registrationEmail" type="email" class="form-control mb-3" placeholder="Enter your email">
                <input name="registrationPassword" type="password" class="form-control mb-3" placeholder="Enter your password">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="registrationRole" id="select-candidate" checked value="candidate">
                    <label class="form-check-label" for="select-candidate">
                        Candidate
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="registration-role" id="select-hr" value="recruiter">
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
