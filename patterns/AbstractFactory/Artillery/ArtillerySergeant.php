<?php

    namespace Patterns\AbstractFactory;

    class ArtillerySergeant implements SergeantInterface
    {
        public function followOfficerOrders()
        {
            echo 'I follow artillery officer`s orders!';
        }

        public function leadPrivate()
        {
            echo 'I order private soldier.';
        }
    }
