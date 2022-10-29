<?php
/** @var array $args */
require_once __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col col-9">
                <article class="recruiter-account">

                    <?php require_once __DIR__ . '/parts/authorizedUserMenu.php'; ?>

                    <?php if (isset($args['updateDeveloperProfileMessage'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $args['updateDeveloperProfileMessage']; ?>
                        </div>
                    <?php endif; ?>

                    <h1>Positions and company</h1>

                    <h3 class="mb-36">Edit positions</h3>
                    <p><a href="/account/recruiter/new-position" target="_blank">Add new position</a></p>
                    <ul class="positions">
                        <li>
                            <span class="position-name">Position name</span>
                            <span class="edit-position"><a href="#edit_position">Edit position</a></span>
                            <span class="delete-position"><a href="#delete_position">Delete position</a></span>
                        </li>
                        <li>
                            <span class="position-name">Position name</span>
                            <span class="edit-position"><a href="#edit_position">Edit position</a></span>
                            <span class="delete-position"><a href="#delete_position">Delete position</a></span>
                        </li>
                    </ul>
                    <h3 class="mb-36">Edit company</h3>

                    <form id="edit-recruiter-profile" action="/account/recruiter" method="post" class="edit-recruiter-profile">
                        <div class="form-group row mb-4">
                            <label for="company-name" class="col-sm-3 col-form-label">Company name</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="companyName"
                                       id="company-name"
                                       placeholder="e.g. Google"
                                       value="<?php echo $args['companyName']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="company-about" class="col-sm-3 col-form-label">About company</label>
                            <div class="col-sm-9">
                                 <textarea name="companyAbout" id="company-about"
                                           class="form-control"><?php echo $args['aboutCompany']; ?>
                                 </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="company-website" class="col-sm-3 col-form-label">Company website</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="companyWebSite"
                                       id="company-name"
                                       placeholder="e.g. https://google.com"
                                       value="<?php echo $args['companyWebSite']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="company-employees" class="col-sm-3 col-form-label">Company employees</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control"
                                       name="companyEmployees"
                                       id="company-employees"
                                       placeholder="e.g. 10"
                                       value="<?php echo $args['companyEmployees']; ?>"
                                >
                            </div>
                        </div>
                        <div class=" form-group row mb-4">
                            <label for="company-country" class="col-sm-3 col-form-label">Head office country</label>
                            <div class="col-sm-9">
                                <select id="company-country" name="companyCountry" class="form-control">
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
                                            <?php if ($country === $args['companyCountry']) :
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
                            <label for="company-city" class="col-sm-3 col-form-label">Head Office City</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="companyCity"
                                       id="company-city"
                                       placeholder="Kyiv"
                                       value="<?php echo $args['companyCity']; ?>">
                            </div>
                        </div>
                        <div class=" form-group row mb-4">
                            <label for="technologies" class="col-sm-3 col-form-label">Technologies we use</label>
                            <div class="col-sm-9">
                                <?php foreach ($args['technologies'] as $technology): ?>
                                    <div class="form-check form-check-inline">
                                        <input name="technologies[]"
                                               class="form-check-input"
                                               type="checkbox"
                                               value="<?php echo $technology['skillName']; ?>"
                                               id="technologies<?php echo $technology['skillName']; ?>"
                                            <?php if (
                                                $args['companyTechnologies'] && in_array($technology['skillName'], $args['companyTechnologies'])
                                            ):
                                                echo 'checked';
                                            endif; ?>
                                        >
                                        <label class="form-check-label" for="technologies<?php echo $technology['skillName']; ?>">
                                            <?php echo $technology['skillName']; ?>
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
<?php require_once __DIR__ . '/parts/footer.php'; ?>
