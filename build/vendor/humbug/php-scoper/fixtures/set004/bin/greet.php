<?php

declare (strict_types=1);
namespace RoRdb;

require_once __DIR__ . '/../vendor/autoload.php';
use RoRdb\Set004\Greeter;
echo (new Greeter())->greet() . \PHP_EOL;
