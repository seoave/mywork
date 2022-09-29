<?php

    namespace Patterns\AbstractFactory;

    class ArtilleryPlatoon implements AbstractPlatoonInterface
    {
        public function createOfficer(): OfficerInterface
        {
            return new ArtilleryOfficer();
        }

        public function createSergeant(): SergeantInterface
        {
            return new ArtillerySergeant();
        }

        public function createSoldier(): SoldierInterface
        {
            return new ArtillerySoldier();
        }
    }
