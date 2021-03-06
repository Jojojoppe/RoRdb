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

use function array_map;
use RoRdb\Fidry\Console\InputAssert;
use function RoRdb\Safe\sprintf;
/**
 * @template TypedValue
 * @implements InputType<list<TypedValue>>
 */
final class ListType implements InputType
{
    /**
     * @var InputType<TypedValue>
     */
    private InputType $innerType;
    /**
     * @param InputType<TypedValue> $innerType
     */
    public function __construct(InputType $innerType)
    {
        $this->innerType = $innerType;
    }
    public function coerceValue($value) : array
    {
        InputAssert::assertIsList($value);
        return array_map(fn(string $element) => $this->innerType->coerceValue($element), $value);
    }
    public function getTypeClassNames() : array
    {
        return [self::class, ...$this->innerType->getTypeClassNames()];
    }
    /** @psalm-suppress MoreSpecificReturnType */
    public function getPsalmTypeDeclaration() : string
    {
        /** @psalm-suppress LessSpecificReturnStatement */
        return sprintf('list<%s>', $this->innerType->getPsalmTypeDeclaration());
    }
    public function getPhpTypeDeclaration() : ?string
    {
        return 'array';
    }
}
