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
 * @implements ScalarType<string>
 */
final class StringChoiceType implements ScalarType
{
    /**
     * @var list<string>
     */
    private array $choices;
    /**
     * @param list<string> $choices
     */
    public function __construct(array $choices)
    {
        $this->choices = $choices;
    }
    public function coerceValue($value) : string
    {
        $value = (new StringType())->coerceValue($value);
        /** @psalm-suppress MissingClosureReturnType */
        InputAssert::castThrowException(fn() => Assert::inArray($value, $this->choices));
        return $value;
    }
    public function getTypeClassNames() : array
    {
        return [self::class];
    }
    public function getPsalmTypeDeclaration() : string
    {
        return 'string';
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'string';
    }
}
