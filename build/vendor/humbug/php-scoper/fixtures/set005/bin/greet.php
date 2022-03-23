<?php

declare (strict_types=1);
namespace RoRdb;

require_once __DIR__ . '/../vendor/autoload.php';
use RoRdb\Assert\Assertion;
use RoRdb\Set005\Greeter;
Assertion::true(\true);
echo (new Greeter())->greet() . \PHP_EOL;
