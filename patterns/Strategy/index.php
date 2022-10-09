<?php

    declare(strict_types=1);

    use Patterns\Strategy\AddNumbersStrategy;
    use Patterns\Strategy\MultiplyNumbersStrategy;
    use Patterns\Strategy\Resolver;

    require_once __DIR__ . '/../../bootstrap.php';
    echo 'Strategy pattern' . PHP_EOL;

    $strategy = new Resolver(new AddNumbersStrategy());
    //$strategy = new Resolver(new MultiplyNumbersStrategy());

    $strategy->execute(5, 2);
