<?php /** @var array $args */
$roleSlug = $_SESSION['userRole'] == 'candidate' ? 'developer' : 'recruiter';
?>
<ul class="account-menu">
    <?php if (! empty($_SESSION['userId']) && $_SESSION['userRole'] !== 'administrator'): ?>
        <li>
            <a href="/account/<?php echo $roleSlug ?>">
                Profile
            </a>
        </li>
        <li>
            <a href="/<?php echo $roleSlug ?>s/<?php echo $_SESSION['userId'];
            ?>"
               target="_blank">
                Public profile
            </a>
        </li>
    <?php endif; ?>

    <li><a href="/account">
            Account
        </a>
    </li>
</ul>
