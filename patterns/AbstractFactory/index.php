<?php
    declare(strict_types=1);

    require_once __DIR__ . '/../../bootstrap.php';

    use Patterns\AbstractFactory\Artillery\ArtilleryPlatoon;
    use Patterns\AbstractFactory\Infantry\InfantryPlatoon;

    $infantryPlatoon = new InfantryPlatoon();
    $infantryOfficer = $infantryPlatoon->createOfficer();
    echo $infantryOfficer->leadSergeant();

    $artilleryPlatoon = new ArtilleryPlatoon();
    $artilleryOfficer = $artilleryPlatoon->createOfficer();
    echo $artilleryOfficer->leadSergeant();
