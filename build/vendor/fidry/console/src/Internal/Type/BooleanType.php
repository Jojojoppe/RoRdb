<?php

/*
 * This file is part of the Fidry\Console package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace RoRdb\Fidry\Console\Internal\Type;

use RoRdb\Fidry\Console\InputAssert;
// TODO: to split into safe & unsafe
/**
 * @implements ScalarType<bool>
 */
final class BooleanType implements ScalarType
{
    public function coerceValue($value) : bool
    {
        InputAssert::assertIsScalar($value);
        return (bool) $value;
    }
    public function getTypeClassNames() : array
    {
        return [self::class];
    }
    public function getPsalmTypeDeclaration() : string
    {
        return 'bool';
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'bool';
    }
}
