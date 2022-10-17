<?php
/** @var mysqli $connect */

require_once __DIR__ . '/connect.php';

mysqli_query(
    $connect,
    'CREATE TABLE IF NOT EXISTS companies (
    id INT NOT NULL AUTO_INCREMENT,
    userId INT NOT NULL, 
    name VARCHAR(255) NOT NULL UNIQUE,
    about TEXT(65535),
    website VARCHAR(255),
    employees INT,
    country VARCHAR(255),
    city VARCHAR(255),
    technologies VARCHAR(255),    
    PRIMARY KEY (id),
    FOREIGN KEY (userId) REFERENCES users (id)
    )'
);
