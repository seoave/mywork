<?php

    namespace Patterns\AbstractFactory;

    class ArtilleryOfficer implements OfficerInterface
    {
        public function leadSergeant()
        {
            echo 'I order Sgt';
        }
    }
