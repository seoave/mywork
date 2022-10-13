<?php
/** @var array $args */
require __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col col-9">
                <article class="candidate-account">

                    <?php require __DIR__ . '/parts/authorizedUserMenu.php'; ?>

                    <?php if (isset($args['updateDeveloperProfileMessage'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $args['updateDeveloperProfileMessage']; ?>
                        </div>
                    <?php endif; ?>

                    <form id="edit-developer-profile" action="/account/developer" method="post" class="edit-developer-profile">
                        <div class="form-group row mb-4">
                            <label for="developer-position" class="col-sm-3 col-form-label">Position</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="developerPosition"
                                       id="developer-position"
                                       placeholder="e.g. PHP developer"
                                       value="<?php echo $args['position']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-desired-salary" class="col-sm-3 col-form-label">Desired salary</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="number"
                                           class="form-control"
                                           name="developerDesiredSalary"
                                           id="developer-desired-salary"
                                           placeholder="e.g. 2000"
                                           value="<?php echo $args['salary']; ?>"
                                    >
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-experience-term" class="col-sm-3 col-form-label">Term of work experience</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control"
                                       name="developerExperienceTerm"
                                       id="developer-experience-term"
                                       placeholder="e.g. 2.5"
                                       value="<?php echo $args['experienceTerm']; ?>"
                                >
                            </div>
                        </div>
                        <div class=" form-group row mb-4">
                            <label for="country" class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                                <select id="country" name="country" class="form-control">
                                    <option value="" disabled selected>Select country</option>
                                    <?php
                                    $countries = [
                                        "UA" => "Ukraine",
                                        "AF" => "Afghanistan",
                                        "AX" => "Aland Islands",
                                        "AL" => "Albania",
                                        "DZ" => "Algeria",
                                        "AS" => "American Samoa",
                                        "AD" => "Andorra",
                                        "AO" => "Angola",
                                        "AI" => "Anguilla",
                                        "AQ" => "Antarctica",
                                        "AG" => "Antigua and Barbuda",
                                        "AR" => "Argentina",
                                        "AM" => "Armenia",
                                        "AW" => "Aruba",
                                        "AU" => "Australia",
                                        "AT" => "Austria",
                                        "AZ" => "Azerbaijan",
                                        "BS" => "Bahamas",
                                        "BH" => "Bahrain",
                                        "BD" => "Bangladesh",
                                        "BB" => "Barbados",
                                        "BY" => "Belarus",
                                        "BE" => "Belgium",
                                        "BZ" => "Belize",
                                        "BJ" => "Benin",
                                        "BM" => "Bermuda",
                                        "BT" => "Bhutan",
                                        "BO" => "Bolivia",
                                        "BQ" => "Bonaire, Sint Eustatius and Saba",
                                        "BA" => "Bosnia and Herzegovina",
                                        "BW" => "Botswana",
                                        "BV" => "Bouvet Island",
                                        "BR" => "Brazil",
                                        "IO" => "British Indian Ocean Territory",
                                        "BN" => "Brunei Darussalam",
                                        "BG" => "Bulgaria",
                                        "BF" => "Burkina Faso",
                                        "BI" => "Burundi",
                                        "KH" => "Cambodia",
                                        "CM" => "Cameroon",
                                        "CA" => "Canada",
                                        "CV" => "Cape Verde",
                                        "KY" => "Cayman Islands",
                                        "CF" => "Central African Republic",
                                        "TD" => "Chad",
                                        "CL" => "Chile",
                                        "CN" => "China",
                                        "CX" => "Christmas Island",
                                        "CC" => "Cocos (Keeling) Islands",
                                        "CO" => "Colombia",
                                        "KM" => "Comoros",
                                        "CG" => "Congo",
                                        "CD" => "Congo, Democratic Republic of the Congo",
                                        "CK" => "Cook Islands",
                                        "CR" => "Costa Rica",
                                        "CI" => "Cote D'Ivoire",
                                        "HR" => "Croatia",
                                        "CU" => "Cuba",
                                        "CW" => "Curacao",
                                        "CY" => "Cyprus",
                                        "CZ" => "Czech Republic",
                                        "DK" => "Denmark",
                                        "DJ" => "Djibouti",
                                        "DM" => "Dominica",
                                        "DO" => "Dominican Republic",
                                        "EC" => "Ecuador",
                                        "EG" => "Egypt",
                                        "SV" => "El Salvador",
                                        "GQ" => "Equatorial Guinea",
                                        "ER" => "Eritrea",
                                        "EE" => "Estonia",
                                        "ET" => "Ethiopia",
                                        "FK" => "Falkland Islands (Malvinas)",
                                        "FO" => "Faroe Islands",
                                        "FJ" => "Fiji",
                                        "FI" => "Finland",
                                        "FR" => "France",
                                        "GF" => "French Guiana",
                                        "PF" => "French Polynesia",
                                        "TF" => "French Southern Territories",
                                        "GA" => "Gabon",
                                        "GM" => "Gambia",
                                        "GE" => "Georgia",
                                        "DE" => "Germany",
                                        "GH" => "Ghana",
                                        "GI" => "Gibraltar",
                                        "GR" => "Greece",
                                        "GL" => "Greenland",
                                        "GD" => "Grenada",
                                        "GP" => "Guadeloupe",
                                        "GU" => "Guam",
                                        "GT" => "Guatemala",
                                        "GG" => "Guernsey",
                                        "GN" => "Guinea",
                                        "GW" => "Guinea-Bissau",
                                        "GY" => "Guyana",
                                        "HT" => "Haiti",
                                        "HM" => "Heard Island and Mcdonald Islands",
                                        "VA" => "Holy See (Vatican City State)",
                                        "HN" => "Honduras",
                                        "HK" => "Hong Kong",
                                        "HU" => "Hungary",
                                        "IS" => "Iceland",
                                        "IN" => "India",
                                        "ID" => "Indonesia",
                                        "IR" => "Iran, Islamic Republic of",
                                        "IQ" => "Iraq",
                                        "IE" => "Ireland",
                                        "IM" => "Isle of Man",
                                        "IL" => "Israel",
                                        "IT" => "Italy",
                                        "JM" => "Jamaica",
                                        "JP" => "Japan",
                                        "JE" => "Jersey",
                                        "JO" => "Jordan",
                                        "KZ" => "Kazakhstan",
                                        "KE" => "Kenya",
                                        "KI" => "Kiribati",
                                        "KP" => "Korea, Democratic People's Republic of",
                                        "KR" => "Korea, Republic of",
                                        "XK" => "Kosovo",
                                        "KW" => "Kuwait",
                                        "KG" => "Kyrgyzstan",
                                        "LA" => "Lao People's Democratic Republic",
                                        "LV" => "Latvia",
                                        "LB" => "Lebanon",
                                        "LS" => "Lesotho",
                                        "LR" => "Liberia",
                                        "LY" => "Libyan Arab Jamahiriya",
                                        "LI" => "Liechtenstein",
                                        "LT" => "Lithuania",
                                        "LU" => "Luxembourg",
                                        "MO" => "Macao",
                                        "MK" => "Macedonia, the Former Yugoslav Republic of",
                                        "MG" => "Madagascar",
                                        "MW" => "Malawi",
                                        "MY" => "Malaysia",
                                        "MV" => "Maldives",
                                        "ML" => "Mali",
                                        "MT" => "Malta",
                                        "MH" => "Marshall Islands",
                                        "MQ" => "Martinique",
                                        "MR" => "Mauritania",
                                        "MU" => "Mauritius",
                                        "YT" => "Mayotte",
                                        "MX" => "Mexico",
                                        "FM" => "Micronesia, Federated States of",
                                        "MD" => "Moldova, Republic of",
                                        "MC" => "Monaco",
                                        "MN" => "Mongolia",
                                        "ME" => "Montenegro",
                                        "MS" => "Montserrat",
                                        "MA" => "Morocco",
                                        "MZ" => "Mozambique",
                                        "MM" => "Myanmar",
                                        "NA" => "Namibia",
                                        "NR" => "Nauru",
                                        "NP" => "Nepal",
                                        "NL" => "Netherlands",
                                        "AN" => "Netherlands Antilles",
                                        "NC" => "New Caledonia",
                                        "NZ" => "New Zealand",
                                        "NI" => "Nicaragua",
                                        "NE" => "Niger",
                                        "NG" => "Nigeria",
                                        "NU" => "Niue",
                                        "NF" => "Norfolk Island",
                                        "MP" => "Northern Mariana Islands",
                                        "NO" => "Norway",
                                        "OM" => "Oman",
                                        "PK" => "Pakistan",
                                        "PW" => "Palau",
                                        "PS" => "Palestinian Territory, Occupied",
                                        "PA" => "Panama",
                                        "PG" => "Papua New Guinea",
                                        "PY" => "Paraguay",
                                        "PE" => "Peru",
                                        "PH" => "Philippines",
                                        "PN" => "Pitcairn",
                                        "PL" => "Poland",
                                        "PT" => "Portugal",
                                        "PR" => "Puerto Rico",
                                        "QA" => "Qatar",
                                        "RE" => "Reunion",
                                        "RO" => "Romania",
                                        "RU" => "Russian Federation",
                                        "RW" => "Rwanda",
                                        "BL" => "Saint Barthelemy",
                                        "SH" => "Saint Helena",
                                        "KN" => "Saint Kitts and Nevis",
                                        "LC" => "Saint Lucia",
                                        "MF" => "Saint Martin",
                                        "PM" => "Saint Pierre and Miquelon",
                                        "VC" => "Saint Vincent and the Grenadines",
                                        "WS" => "Samoa",
                                        "SM" => "San Marino",
                                        "ST" => "Sao Tome and Principe",
                                        "SA" => "Saudi Arabia",
                                        "SN" => "Senegal",
                                        "RS" => "Serbia",
                                        "CS" => "Serbia and Montenegro",
                                        "SC" => "Seychelles",
                                        "SL" => "Sierra Leone",
                                        "SG" => "Singapore",
                                        "SX" => "Sint Maarten",
                                        "SK" => "Slovakia",
                                        "SI" => "Slovenia",
                                        "SB" => "Solomon Islands",
                                        "SO" => "Somalia",
                                        "ZA" => "South Africa",
                                        "GS" => "South Georgia and the South Sandwich Islands",
                                        "SS" => "South Sudan",
                                        "ES" => "Spain",
                                        "LK" => "Sri Lanka",
                                        "SD" => "Sudan",
                                        "SR" => "Suriname",
                                        "SJ" => "Svalbard and Jan Mayen",
                                        "SZ" => "Swaziland",
                                        "SE" => "Sweden",
                                        "CH" => "Switzerland",
                                        "SY" => "Syrian Arab Republic",
                                        "TW" => "Taiwan, Province of China",
                                        "TJ" => "Tajikistan",
                                        "TZ" => "Tanzania, United Republic of",
                                        "TH" => "Thailand",
                                        "TL" => "Timor-Leste",
                                        "TG" => "Togo",
                                        "TK" => "Tokelau",
                                        "TO" => "Tonga",
                                        "TT" => "Trinidad and Tobago",
                                        "TN" => "Tunisia",
                                        "TR" => "Turkey",
                                        "TM" => "Turkmenistan",
                                        "TC" => "Turks and Caicos Islands",
                                        "TV" => "Tuvalu",
                                        "UG" => "Uganda",
                                        "AE" => "United Arab Emirates",
                                        "GB" => "United Kingdom",
                                        "US" => "United States",
                                        "UM" => "United States Minor Outlying Islands",
                                        "UY" => "Uruguay",
                                        "UZ" => "Uzbekistan",
                                        "VU" => "Vanuatu",
                                        "VE" => "Venezuela",
                                        "VN" => "Viet Nam",
                                        "VG" => "Virgin Islands, British",
                                        "VI" => "Virgin Islands, U.s.",
                                        "WF" => "Wallis and Futuna",
                                        "EH" => "Western Sahara",
                                        "YE" => "Yemen",
                                        "ZM" => "Zambia",
                                        "ZW" => "Zimbabwe",
                                    ];
                                    ?>
                                    <?php foreach ($countries as $country): ?>
                                        <option value="<?php echo $country ?>"
                                            <?php if ($country === $args['country']) :
                                                echo 'selected';
                                            endif; ?>
                                        >
                                            <?php echo $country ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-city" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="developerCity" id="developer-city"
                                       placeholder="Kyiv" value="<?php
                                echo $args['city']; ?>">
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
                                               value="<?php echo $skill; ?>"
                                               id="developerSkills<?php echo $skill; ?>"
                                            <?php if ($args['developerSkills'] && in_array($skill, $args['developerSkills'])):
                                                echo 'checked';
                                            endif; ?>
                                        >
                                        <label class="form-check-label" for="developerSkills<?php echo $skill; ?>">
                                            <?php echo $skill; ?>
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
                                        <option value="<?php echo $category ?>"
                                            <?php if ($category === $args['developerCategory']) :
                                                echo 'selected';
                                            endif; ?>
                                        >
                                            <?php echo $category ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-experience" class="col-sm-3 col-form-label">Experience</label>
                            <div class="col-sm-9">
                                        <textarea name="developerExperience" id="developer-experience"
                                                  class="form-control"><?php echo $args['experience']; ?>
                                        </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-about" class="col-sm-3 col-form-label">About me</label>
                            <div class="col-sm-9">
                                 <textarea name="developerAbout" id="developer-about"
                                           class="form-control"><?php echo $args['about']; ?>
                                 </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-education" class="col-sm-3 col-form-label">Education</label>
                            <div class="col-sm-9">
                                 <textarea name="developerEducation" id="developer-education"
                                           class="form-control"><?php echo $args['education']; ?>
                                 </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-english-level" class="col-sm-3 col-form-label">English level</label>
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
                                        <input name="developerEnglishLevel"
                                               class="form-check-input"
                                               type="radio"
                                               value="<?php echo $level; ?>"
                                               id="<?php echo $level; ?>"
                                            <?php if ($level === $args['english']) :
                                                echo 'checked';
                                            endif; ?>
                                        >
                                        <label class="form-check-label" for="<?php echo $level; ?>">
                                            <?php echo $level; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="developer-english-level" class="col-sm-3 col-form-label">Desire job types</label>
                            <div class="col-sm-9">
                                <?php foreach ($args['jobTypes'] as $jobType): ?>
                                    <div class="form-check">
                                        <input name="desireJobTypes[]"
                                               class="form-check-input"
                                               type="checkbox"
                                               value="<?php echo $jobType; ?>"
                                               id="desire-job-type-<?php echo $jobType; ?>"
                                            <?php if ($args['developerJobTypes'] && in_array($jobType, $args['developerJobTypes'])):
                                                echo 'checked';
                                            endif; ?>
                                        >
                                        <label class="form-check-label" for="desire-job-type-<?php echo $jobType; ?>">
                                            <?php echo $jobType; ?>
                                        </label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update profile</button>
                    </form>
                </article>
            </div>
            <div class="col col-3">
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . '/parts/footer.php'; ?>
