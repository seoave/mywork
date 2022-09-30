<?php

    namespace Patterns\AbstractFactory\Artillery;

    use Patterns\AbstractFactory\AbstractPlatoonInterface;

    class ArtilleryPlatoon implements AbstractPlatoonInterface
    {
        public function createOfficer(): ArtilleryOfficer
        {
            return new ArtilleryOfficer();
        }

        public function createSergeant(): ArtillerySergeant
        {
            return new ArtillerySergeant();
        }

        public function createSoldier(): ArtillerySoldier
        {
            return new ArtillerySoldier();
        }
    }
