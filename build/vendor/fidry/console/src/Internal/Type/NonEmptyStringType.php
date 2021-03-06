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

use RoRdb\Fidry\Console\Input\InvalidInputValueType;
use RoRdb\Fidry\Console\InputAssert;
use function trim;
/**
 * @implements ScalarType<non-empty-string>
 */
final class NonEmptyStringType implements ScalarType
{
    public function coerceValue($value) : string
    {
        InputAssert::string($value);
        $trimmedValue = trim($value);
        if ('' === $trimmedValue) {
            throw new InvalidInputValueType('Expected a non-empty string.');
        }
        return $trimmedValue;
    }
    public function getTypeClassNames() : array
    {
        return [self::class];
    }
    public function getPsalmTypeDeclaration() : string
    {
        return 'non-empty-string';
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'string';
    }
}
