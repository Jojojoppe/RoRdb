<?php

namespace RoRdb;

use RoRdb\JetBrains\PhpStorm\Pure;
/**
 * @since 8.0
 */
class ReflectionUnionType extends \ReflectionType
{
    /**
     * Get list of named types of union type
     *
     * @return ReflectionNamedType[]
     */
    #[\JetBrains\PhpStorm\Pure]
    public function getTypes() : array
    {
    }
}
