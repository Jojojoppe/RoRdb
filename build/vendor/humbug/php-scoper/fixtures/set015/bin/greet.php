<?php

declare (strict_types=1);
namespace RoRdb;

require_once __DIR__ . '/../vendor/autoload.php';
use RoRdb\Set015\Greeter;
$c = new Pimple\Container(['hello' => 'Hello world!']);
echo (new Greeter())->greet($c) . \PHP_EOL;
