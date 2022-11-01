<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5 dashboard">
    <div class="container">
        <article>
            <?php require_once __DIR__ . '/parts/authorizedUserMenu.php'; ?>
            <div class="row">

                <?php if ($args['title']) : ?>
                    <h1 class="text-center"><?php echo $args['title'] ?></h1>
                <?php endif; ?>

                <?php if (isset($args['skillExistsMessage'])): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $args['skillExistsMessage']; ?>
                    </div>
                <?php endif; ?>

            </div>

            <div class="row">

                <form id="new-position" action="/account/recruiter/new-position" method="post">

                    <div class="form-group row mb-4">
                        <label for="position-name" class="col-sm-3 col-form-label">Position name</label>
                        <div class="col-sm-9">
                            <input type="text"
                                   class="form-control"
                                   name="positionName"
                                   id="position-name"
                                   placeholder="PHP developer"
                                   value=""
                            >
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="position-salary" class="col-sm-3 col-form-label">Salary</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">$</div>
                                </div>
                                <input type="number"
                                       class="form-control"
                                       name="positionSalary"
                                       id="position-salary"
                                       placeholder="e.g. 2000"
                                       value=""
                                >
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="position-description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                                 <textarea name="positionDescription" id="position-description"
                                           class="form-control">
                                 </textarea>
                        </div>
                    </div>
                    <div class=" form-group row mb-4">
                        <label for="developer-skills" class="col-sm-3 col-form-label">Skills</label>
                        <div class="col-sm-9">
                            <?php foreach ($args['skills'] as $skill): ?>
                                <div class="form-check form-check-inline">
                                    <input name="developerSkills[]"
                                           class="form-check-input"
                                           type="checkbox"
                                           value="<?php echo $skill['skillName']; ?>"
                                           id="developerSkills<?php echo $skill['skillName']; ?>"
                                    >
                                    <label class="form-check-label" for="developerSkills<?php echo $skill['skillName']; ?>">
                                        <?php echo $skill['skillName']; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="developer-category" class="col-sm-3 col-form-label">IT Category</label>
                        <div class="col-sm-9">
                            <select name="developerCategory" id="developer-category" class="form-control">
                                <option value="" disabled selected>Select category</option>
                                <?php foreach ($args['categories'] as $category): ?>
                                    <option value="<?php echo $category ?>">
                                        <?php echo $category ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="position-english-level" class="col-sm-3 col-form-label">Minimum required English level</label>
                        <div class="col-sm-9">
                            <?php $englishLevels = [
                                'No English',
                                'Beginner/Elementary',
                                'Pre-Intermediate',
                                'Intermediate',
                                'Upper-Intermediate',
                                'Advanced/Fluent',
                            ]; ?>
                            <?php foreach ($englishLevels as $level): ?>
                                <div class="form-check">
                                    <input name="positionEnglishLevel"
                                           class="form-check-input"
                                           type="radio"
                                           value="<?php echo $level; ?>"
                                           id="<?php echo $level; ?>"
                                    >
                                    <label class="form-check-label" for="<?php echo $level; ?>">
                                        <?php echo $level; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="position-job-types" class="col-sm-3 col-form-label">Job types</label>
                        <div class="col-sm-9">
                            <?php foreach ($args['jobTypes'] as $jobType): ?>
                                <div class="form-check">
                                    <input name="positionJobTypes[]"
                                           class="form-check-input"
                                           type="checkbox"
                                           value="<?php echo $jobType; ?>"
                                           id="position-job-type-<?php echo $jobType; ?>"
                                    >
                                    <label class="form-check-label" for="desire-job-type-<?php echo $jobType; ?>">
                                        <?php echo $jobType; ?>
                                    </label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <button type="submit"
                            class="btn btn-primary"
                    >
                        Create new position
                    </button>
                </form>

            </div>
        </article>
    </div>
</main>
<?php require_once __DIR__ . '/parts/footer.php'; ?>
