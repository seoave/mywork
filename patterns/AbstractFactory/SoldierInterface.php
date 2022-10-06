<?php
    declare(strict_types=1);

    namespace Patterns\AbstractFactory;

    interface SoldierInterface
    {
        public function followSergeantOrders();

        public function shoot();

        public function attack();
    }
