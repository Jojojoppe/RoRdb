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
 * There cannot be negative integers with the Symfony console.
 *
 * @see https://github.com/symfony/symfony/issues/27333
 *
 * @implements ScalarType<positive-int|0>
 */
final class NaturalType implements ScalarType
{
    public function coerceValue($value) : int
    {
        InputAssert::integerString($value);
        $intValue = (int) $value;
        /** @psalm-suppress InvalidDocblock,MissingClosureReturnType */
        InputAssert::castThrowException(static fn() => Assert::natural($intValue));
        return (int) $value;
    }
    public function getTypeClassNames() : array
    {
        return [self::class];
    }
    public function getPsalmTypeDeclaration() : string
    {
        return 'positive-int|0';
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'int';
    }
}
