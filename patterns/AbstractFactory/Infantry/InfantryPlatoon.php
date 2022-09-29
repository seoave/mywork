<?php

    namespace Patterns\AbstractFactory;

    class InfantryPlatoon implements AbstractPlatoonInterface
    {
        public function createOfficer(): OfficerInterface
        {
            return new InfantryOfficer();
        }

        public function createSergeant(): SergeantInterface
        {
            return new InfantrySergeant();
        }

        public function createSoldier(): SoldierInterface
        {
            return new InfantrySoldier();
        }
    }
