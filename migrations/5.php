<?php
/** @var mysqli $connect */

require_once __DIR__ . '/connect.php';

mysqli_query(
    $connect,
    'CREATE TABLE IF NOT EXISTS jobs (
    id INT NOT NULL AUTO_INCREMENT,
    companyId INT NOT NULL,
    name VARCHAR(255) NOT NULL UNIQUE,
    salary INT,
    description TEXT(65535),
    skills VARCHAR(255),
    category VARCHAR(255),
    english VARCHAR(255),
    jobTypes VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (companyId) REFERENCES companies (id)
    )'
);
