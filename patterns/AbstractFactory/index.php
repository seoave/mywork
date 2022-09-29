<?php
    declare(strict_types=1);

    use Patterns\AbstractFactory\ArtilleryPlatoon;
    use Patterns\AbstractFactory\InfantryPlatoon;

    require_once __DIR__ . '/../../vendor/autoload.php';

    $infantryPlatoon = new InfantryPlatoon();
    $infantryOfficer = $infantryPlatoon->createOfficer();
    echo $infantryOfficer->leadSergeant();

    $artilleryPlatoon = new ArtilleryPlatoon();
    $artilleryOfficer = $artilleryPlatoon->createOfficer();
    echo $artilleryOfficer->leadSergeant();
