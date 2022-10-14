<?php
/** @var mysqli $connect */
require_once __DIR__ . '/connect.php';

mysqli_query($connect,
    'CREATE TABLE IF NOT EXISTS skills (
 id INT NOT NULL AUTO_INCREMENT,
 skillName VARCHAR(255) NOT NULL UNIQUE,
 PRIMARY KEY (id)  
)'
);
