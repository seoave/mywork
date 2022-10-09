<?php

    namespace Patterns\Strategy;

    class AddNumbersStrategy implements StrategyInterface
    {
        public function execute(int $a, int $b)
        {
            echo 'Add Strategy: a + b ' . PHP_EOL;

            return $a + $b;
        }
    }
