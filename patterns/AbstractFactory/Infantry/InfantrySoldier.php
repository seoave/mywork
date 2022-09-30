<?php

    namespace Patterns\AbstractFactory\Infantry;

    use Patterns\AbstractFactory\SoldierInterface;

    class InfantrySoldier implements SoldierInterface
    {
        public function followSergeantOrders()
        {
            echo 'I follow sergeant`s orders!';
        }

        public function shoot()
        {
            echo 'I shoot!';
        }

        public function attack()
        {
            echo 'I attack!';
        }
    }
