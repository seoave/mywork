<?php

    namespace Patterns\AbstractFactory;

    class InfantryOfficer implements OfficerInterface
    {
        public function leadSergeant()
        {
            echo 'I manage sergeant';
        }
    }
