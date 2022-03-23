<?php

declare (strict_types=1);
namespace RoRdb\Acme;

use function file_exists;
if (file_exists($autoload = __DIR__ . '/vendor/scoper-autoload.php')) {
    require_once $autoload;
} else {
    require_once __DIR__ . '/vendor/autoload.php';
}
dump('foo', 'bar');
