<?php
    /** @var array $args */
    require __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col col-9">
                <article class="candidate-profile">
                    <div class="photo-position-contact mb-36">
                        <div class="candidate-photo">
                            <img src="../assets/images/avatar.png" alt="">
                        </div>
                        <div class="position-contact">
                            <div class="name-position">
                                <h1>FirstName LastName</h1>

                                <?php if ($args['position']): ?>
                                    <h2><?php echo $args['position']; ?></h2>
                                <?php endif; ?>

                                <?php if ($args['salary']): ?>
                                    <span class="desired-salary">$<?php echo $args['salary']; ?></span>
                                <?php endif; ?>

                                <?php if ($args['salary']): ?>
                                    <span class="desired-work-type"><?php echo $args['jobTypes']; ?></span>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>

                    <?php if ($args['about']) : ?>
                        <div class="short-description  mb-36">
                            <h3 class="text-primary">About</h3>
                            <p><?php echo $args['about']; ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($args['skills']): ?>
                        <div class="skills mb-36">
                            <h3 class="text-primary">Skills</h3>
                            <p><?php echo $args['skills']; ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($args['englishLevel']): ?>
                        <div class="languages mb-36">
                            <h3 class="text-primary">English level</h3>
                            <p><?php echo $args['englishLevel']; ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($args['experienceTerm']): ?>
                        <div class="experience mb-36">
                            <h3 class="text-primary">Experience term</h3>
                            <p><?php echo $args['experienceTerm']; ?> years</p>
                        </div>
                    <?php endif; ?>

                    <?php if ($args['experience']): ?>
                        <div class="experience mb-36">
                            <h3 class="text-primary">Work Experiences</h3>
                            <p><?php echo $args['experience']; ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if ($args['education']): ?>
                        <div class="education mb-36">
                            <h3 class="text-primary">Education</h3>
                            <p><?php echo $args['education']; ?></p>
                        </div>
                    <?php endif; ?>
                </article>
            </div>
            <div class="col col-3">
                <div class="contact mb-36">
                    <h3>Contact info</h3>

                    <?php if ($args['phone']): ?>
                        <h4><i class="bi bi-telephone-fill text-primary"></i> <?php echo $args['phone']; ?></h4>
                    <?php endif; ?>

                    <?php if ($args['email']): ?>
                        <h4><i class="bi bi-envelope-fill text-primary"></i> <?php echo $args['email']; ?></h4>
                    <?php endif; ?>

                    <?php if ($args['address']): ?>
                        <h4><i class="bi bi-geo-alt-fill text-primary"></i><?php echo $args['address']; ?></h4>
                    <?php endif; ?>

                </div>
                <div class="message mb-36">
                    <h3>Send message to candidate</h3>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Subject</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                   aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="similiar-profiles mb-36">
                    <h3>Similiar profiles</h3>
                    <ul>
                        <li>
                            <div class="similiar-profile">
                                <a href="#"><h4>PHP developer</h4></a>
                                <span class="price">$500</span>
                                <span class="location">Kyiv, Ukraine</span>
                            </div>
                        </li>
                        <li>
                            <div class="similiar-profile">
                                <a href="#"><h4>React developer</h4></a>
                                <span class="price">$500</span>
                                <span class="location">Brovary, Ukraine</span>
                            </div>
                        </li>
                        <li>
                            <div class="similiar-profile">
                                <a href="#"><h4>CSS developer</h4></a>
                                <span class="price">$500</span>
                                <span class="location">Brovary, Ukraine</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
