<?php
    /** @var array $args */
    require __DIR__ . '/parts/header.php'; ?>
<main class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col col-9">
                <article class="candidate-account">

                    <?php require __DIR__ . '/parts/authorizedUserMenu.php'; ?>

                    <?php if (isset($args['notice'])): ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo $args['notice']; ?>
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="photo-position-contact mb-36">

                            <?php if ($args['userPhoto']): ?>
                                <div class="candidate-photo">
                                    <img src="../assets/images/<?php echo $args['userPhoto']; ?>" alt="">
                                </div>
                            <?php endif; ?>

                            <div class="position-contact">
                                <div class="name-position">
                                    <h1 class="mb-36"><?php echo $args['userName']; ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form id="edit-user-photo"
                          action=""
                          method="post"
                          class="edit-user-photo"
                          enctype="multipart/form-data"
                    >
                        <div class="form-group row mb-4">
                            <label for="user-photo" class="col-sm-3 col-form-label">Photo</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <input type="file"
                                           class="form-control"
                                           name="userPhoto"
                                           id="user-photo"
                                           aria-describedby="user-photo"
                                           aria-label="Upload photo"
                                           value="<?php echo $args['userPhoto']; ?>"
                                    >
                                    <button class="btn btn-outline-secondary"
                                            type="submit"
                                            id="sumbitUserPhoto"
                                            name="userPhotoSubmit"
                                            value="photoSubmited"
                                    >
                                        Upload photo
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>

                    <form id="edit-user-profile" action="" method="post" class="edit-user-profile" enctype="multipart/form-data">
                        <div class="form-group row mb-4">
                            <label for="user-name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="userName"
                                       id="user-name"
                                       placeholder="e.g. Bernard"
                                       value="<?php echo $args['userName']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="user-role" class="col-sm-3 col-form-label">Role</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="userRole"
                                       id="user-role"
                                       value="<?php echo $args['userRole']; ?>"
                                       readonly
                                       disabled
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="user-phone" class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text"
                                       class="form-control"
                                       name="userPhone"
                                       id="user-phone"
                                       placeholder="e.g. +380637778899"
                                       value="<?php echo $args['userPhone']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="user-birthday" class="col-sm-3 col-form-label">Birthday</label>
                            <div class="col-sm-9">
                                <input type="date"
                                       class="form-control"
                                       name="userBirthday"
                                       id="user-birthday"
                                       placeholder=""
                                       value="<?php echo $args['userBirthday']; ?>"
                                >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="user-email" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email"
                                       class="form-control"
                                       name="userEmail"
                                       id="user-email"
                                       placeholder="e.g. user@mail.com"
                                       value="<?php echo $args['userEmail']; ?>"
                                       readonly
                                       disabled
                                >
                            </div>
                        </div>
                        <div class=" form-group row mb-4">
                            <label for="user-country" class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                                <select id="user-country" name="userCountry" class="form-control">
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
                                            <?php if ($country === $args['userCountry']) :
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
                            <label for="user-city" class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                                <input
                                        type="text"
                                        class="form-control"
                                        name="userCity"
                                        id="user-city"
                                        placeholder="Kyiv"
                                        value="<?php echo $args['userCity']; ?>">
                            </div>
                        </div>
                        <button type="submit"
                                class="btn btn-primary"
                                name="userProfileSubmit"
                                value="userProfileSubmited"
                        >
                            Update profile
                        </button>
                    </form>
                </article>
            </div>
            <div class="col col-3">
            </div>
        </div>
    </div>
</main>
<?php require __DIR__ . '/parts/footer.php'; ?>
