<?php

    namespace Patterns\AbstractFactory\Artillery;

    use Patterns\AbstractFactory\OfficerInterface;

    class ArtilleryOfficer implements OfficerInterface
    {
        public function leadSergeant(): string
        {
            return 'I order Sgt' . PHP_EOL;
        }
    }
