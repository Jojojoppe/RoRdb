<?php

namespace RoRdb\JetBrains\PhpStorm\Internal;

use Attribute;
use RoRdb\JetBrains\PhpStorm\Deprecated;
use RoRdb\JetBrains\PhpStorm\ExpectedValues;
/**
 * For PhpStorm internal use only
 * @since 8.0
 * @internal
 */
#[\Attribute(Attribute::TARGET_FUNCTION | Attribute::TARGET_METHOD | Attribute::TARGET_PARAMETER)]
class PhpStormStubsElementAvailable
{
    public function __construct(#[\JetBrains\PhpStorm\ExpectedValues(Deprecated::PHP_VERSIONS)] $from, #[\JetBrains\PhpStorm\ExpectedValues(Deprecated::PHP_VERSIONS)] $to = null)
    {
    }
}
