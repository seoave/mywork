<?php /** @var array $args */ ?>
<ul class="account-menu">
    <li><a href="/account/developer">Edit profile</a></li>

    <?php if (! empty($args['userId'])): ?>
        <li>
            <a href="/developers/<?php echo $args['userId']; ?>" target="_blank">
                Public profile
            </a>
        </li>
    <?php endif; ?>

    <li><a href="/account" target="_blank">
            Edit account (Contacts, Photo,remove profile, change email and password)
        </a>
    </li>
</ul>
