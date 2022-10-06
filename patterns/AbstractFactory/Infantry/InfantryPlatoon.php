<?php

    namespace Patterns\AbstractFactory\Infantry;

    use Patterns\AbstractFactory\AbstractPlatoonInterface;

    class InfantryPlatoon implements AbstractPlatoonInterface
    {
        public function createOfficer(): InfantryOfficer
        {
            return new InfantryOfficer();
        }

        public function createSergeant(): InfantrySergeant
        {
            return new InfantrySergeant();
        }

        public function createSoldier(): InfantrySoldier
        {
            return new InfantrySoldier();
        }
    }
