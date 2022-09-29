<?php

    namespace Patterns\AbstractFactory;

    class InfantrySergeant implements SergeantInterface
    {
        public function followOfficerOrders()
        {
            echo 'I follow officer`s orders';
        }

        public function leadPrivate()
        {
            echo 'I manage private soldier';
        }
    }
