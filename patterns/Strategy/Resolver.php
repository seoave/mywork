<?php
    declare(strict_types=1);

    namespace Patterns\Strategy;

    class Resolver
    {
        private StrategyInterface $strategy;

        public function __construct(StrategyInterface $strategy)
        {
            $this->strategy = $strategy;
        }

        public function execute($a, $b): float
        {
            return $this->strategy->execute($a, $b);
        }
    }
