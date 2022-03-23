<?php

declare (strict_types=1);
namespace RoRdb;

function foo() : bool
{
    return \true;
}
if (!\function_exists('RoRdb\\bar')) {
    function bar() : bool
    {
        return \true;
    }
}
if (\function_exists('RoRdb\\baz')) {
    baz();
}
