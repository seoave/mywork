<?php require_once __DIR__ . '/parts/header.php'; ?>
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
                                <h2>PHP developer</h2>
                                <span class="desired-salary">$1000</span>
                                <span class="desired-work-type">Full time</span>
                            </div>
                        </div>
                    </div>
                    <div class="short-description  mb-36">
                        <h3 class="text-primary">About</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                        ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                        lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur sodales ligula in libero.
                    </div>
                    <div class="skills mb-36">
                        <h3 class="text-primary">Skills</h3>
                        <p>HTML, PHP, CSS</p>
                    </div>
                    <div class="languages mb-36">
                        <h3 class="text-primary">Languages</h3>
                        <p>English, Deutsch, Albanian</p>
                    </div>
                    <div class="education mb-36">
                        <h3 class="text-primary">Work Experiences</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                        ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                        lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur sodales ligula in libero.
                    </div>
                    <div class="expirience mb-36">
                        <h3 class="text-primary">Education</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed
                        cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis
                        ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum
                        lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                        inceptos himenaeos. Curabitur sodales ligula in libero.
                    </div>
                </article>
            </div>
            <div class="col col-3">
                <div class="contact mb-36">
                    <h3>Contact info</h3>
                    <h4><i class="bi bi-telephone-fill text-primary"></i> +380971234567</h4>
                    <h4><i class="bi bi-envelope-fill text-primary"></i> user@email.com</h4>
                    <h4><i class="bi bi-geo-alt-fill text-primary"></i> Address</h4>
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