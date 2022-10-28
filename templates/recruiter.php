<?php
/**
 * @var array $args
 */
require __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col col-9">
                <article class="candidate-profile hr-profile">
                    <div class="photo-position-contact mb-36">
                        <div class="candidate-photo">

                            <?php if ($args['photo']): ?>
                                <img src="../assets/images/<?php echo $args['photo']; ?>" alt="">
                            <?php else: ?>
                                <div class="circle">
                                    <span>FL</span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="position-contact">
                            <div class="name-position">

                                <?php if ($args['name']) :
                                    echo '<h1>' . $args['name'] . '</h1>';
                                endif; ?>

                                <?php if ($args['companyName']) : ?>
                                    <h2>HR in <?php echo $args['companyName']; ?></h2>
                                <?php endif; ?>

                                <ul>
                                    <li>Користувач з грудня 2020</li>
                                    <li>Активність: позавчора</li>

                                    <?php if ($args['country']) :
                                        echo '<li>' . $args['country'] . '</li>';
                                    endif; ?>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="short-description  mb-36">
                        <h3>Вакансії</h3>
                        <ul>
                            <li>
                                <a href="#"><h4>PHP developer</h4></a>
                            </li>
                            <li>
                                <a href="#"><h4>React developer</h4></a>
                            </li>
                            <li>
                                <a href="#"><h4>CSS developer</h4></a>
                            </li>
                        </ul>
                    </div>

                    <?php if ($args['companyName']) : ?>
                        <div class="short-description  mb-36">
                            <h3>Про компанію <?php echo $args['companyName']; ?></h3>

                            <?php if ($args['companyAbout']):
                                printf('<p>About company: %s',
                                    $args['companyAbout']
                                );
                            endif; ?>

                            <?php if ($args['companyEmployees']):
                                printf('<p>Employees: %d',
                                    $args['companyEmployees']
                                );
                            endif; ?>

                            <?php if ($args['companyAddress']):
                                printf('<p>Headquater: %s',
                                    $args['companyAddress']
                                );
                            endif; ?>

                            <?php if ($args['companyWebSite']):
                                printf('<p>Сайт компании: <a href="%s">%s</a></p>',
                                    $args['companyWebSite'],
                                    $args['companyWebSite']
                                );
                            endif; ?>

                        </div>
                    <?php else: ?>
                        <p>No company registered.</p>
                    <?php endif; ?>

                </article>
            </div>
            <div class="col col-3">
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . '/parts/footer.php'; ?>
