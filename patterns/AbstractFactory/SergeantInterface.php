<?php
    declare(strict_types=1);

    namespace Patterns\AbstractFactory;

    interface SergeantInterface
    {
        public function followOfficerOrders();

        public function leadPrivate();
    }
    