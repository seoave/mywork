<?php
/** @var mysqli $connect */

require_once __DIR__ . '/connect.php';

mysqli_query(
    $connect,
    'CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    role VARCHAR(30) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    salt VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    birthday INT,
    country VARCHAR(255),
    city VARCHAR(255),
    phone VARCHAR(255),
    photo VARCHAR(255),
    PRIMARY KEY (id)
    )'
);

mysqli_query(
    $connect,
    "CREATE TABLE IF NOT EXISTS applicants (
    applicantId INT NOT NULL AUTO_INCREMENT,
    userId INT NOT NULL UNIQUE,
    lastName VARCHAR(255),
    PRIMARY KEY (applicantId),
    FOREIGN KEY (userId) REFERENCES users (id)
)"
);
