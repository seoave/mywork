<?php

    namespace Patterns\Strategy;

    class MultiplyNumbersStrategy implements StrategyInterface
    {
        public function execute(int $a, int $b)
        {
            echo 'Multiply Strategy: a * b ' . PHP_EOL;

            return $a * $b;
        }
    }
