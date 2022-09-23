<?php
    if (! isset($_SESSION['userId'])) : ?>
        <div class="btn-group ms-2" role="group" aria-label="Basic mixed styles example">
            <a href="/login" type="button" class="btn btn-outline-success">Login</a>
            <a href="/registration" type="button" class="btn btn-outline-primary">Register</a>
        </div>
    <?php
    else: ?>
        <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/account">
                    Hi, <?php echo $_SESSION['userName']; ?>!
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="#">Message (0)</a></li>
        </ul>
        <a href="/logout" type="button" class="btn btn-outline-success">Logout</a>
    <?php endif; ?>
