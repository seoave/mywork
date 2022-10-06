<?php

    declare(strict_types=1);

    namespace Patterns\AbstractFactory;

    interface AbstractPlatoonInterface
    {
        public function createOfficer(): OfficerInterface;

        public function createSergeant(): SergeantInterface;

        public function createSoldier(): SoldierInterface;
    }
