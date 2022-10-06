<?php

    namespace Patterns\AbstractFactory\Infantry;

    use Patterns\AbstractFactory\OfficerInterface;

    class InfantryOfficer implements OfficerInterface
    {
        public function leadSergeant():string
        {
            return 'I manage sergeant' . PHP_EOL;
        }
    }
