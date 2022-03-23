<?php

namespace RoRdb;

use RoRdb\JetBrains\PhpStorm\Deprecated;
use RoRdb\JetBrains\PhpStorm\Internal\TentativeType;
use RoRdb\JetBrains\PhpStorm\Pure;
/**
 * The ReflectionType class reports information about a function's parameters.
 *
 * @link https://www.php.net/manual/en/class.reflectiontype.php
 * @since 7.0
 */
abstract class ReflectionType implements \Stringable
{
    /**
     * Checks if null is allowed
     *
     * @link https://php.net/manual/en/reflectiontype.allowsnull.php
     * @return bool Returns {@see true} if {@see null} is allowed, otherwise {@see false}
     * @since 7.0
     */
    #[\JetBrains\PhpStorm\Internal\TentativeType]
    public function allowsNull() : bool
    {
    }
    /**
     * Checks if it is a built-in type
     *
     * @link https://php.net/manual/en/reflectiontype.isbuiltin.php
     * @return bool Returns {@see true} if it's a built-in type, otherwise {@see false}
     * @since 7.0
     * @removed 8.0 this method has been removed from the {@see ReflectionType}
     * class and moved to the {@see ReflectionNamedType} child.
     */
    #[\JetBrains\PhpStorm\Pure]
    public function isBuiltin()
    {
    }
    /**
     * To string
     *
     * @link https://php.net/manual/en/reflectiontype.tostring.php
     * @return string Returns the type of the parameter.
     * @since 7.0
     * @see ReflectionNamedType::getName()
     */
    #[\JetBrains\PhpStorm\Deprecated(since: "7.1")]
    public function __toString() : string
    {
    }
    /**
     * Cloning of this class is prohibited
     *
     * @return void
     */
    private final function __clone() : void
    {
    }
}
