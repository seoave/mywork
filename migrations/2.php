<?php
    /** @var mysqli $connect */

    require_once __DIR__ . '/connect.php';

    mysqli_query(
        $connect,
        'CREATE TABLE IF NOT EXISTS resumes (
    id INT NOT NULL AUTO_INCREMENT,
    user_id INT NOT NULL UNIQUE, 
    position VARCHAR(255),
    salary INT,
    experience_term FLOAT,
    country VARCHAR(255),
    city VARCHAR(255),
    skills VARCHAR(255),
    category VARCHAR(30),
    experience TEXT(65535),
    about TEXT(65535),
    education TEXT(65535),
    english VARCHAR(30),
    job_types VARCHAR(120),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users (id)
    )'
    );
