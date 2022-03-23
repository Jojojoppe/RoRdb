<?php

declare (strict_types=1);
namespace RoRdb\Set015;

use RoRdb\Pimple\Container;
class Greeter
{
    public function greet(Container $c) : string
    {
        return $c['hello'];
    }
}
