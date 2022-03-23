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
use RoRdb\Webmozart\Assert\Assert;
/**
 * @implements ScalarType<positive-int>
 */
final class PositiveIntegerType implements ScalarType
{
    public function coerceValue($value) : int
    {
        $intValue = (new NaturalType())->coerceValue($value);
        /** @psalm-suppress MissingClosureReturnType */
        InputAssert::castThrowException(static fn() => Assert::positiveInteger($intValue));
        return $intValue;
    }
    public function getTypeClassNames() : array
    {
        return [self::class];
    }
    public function getPsalmTypeDeclaration() : string
    {
        return 'positive-int';
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'int';
    }
}
