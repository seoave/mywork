<?php

    namespace Patterns\AbstractFactory\Artillery;

    use Patterns\AbstractFactory\SergeantInterface;

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
