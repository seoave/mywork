<?php

    namespace Patterns\AbstractFactory\Artillery;

    use Patterns\AbstractFactory\SoldierInterface;

    class ArtillerySoldier implements SoldierInterface
    {
        public function followSergeantOrders()
        {
            echo 'I follow artillery sergeant orders!';
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
