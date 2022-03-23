<?php

declare (strict_types=1);
/*
 * This file is part of the humbug/php-scoper package.
 *
 * Copyright (c) 2017 Théo FIDRY <theo.fidry@gmail.com>,
 *                    Pádraic Brady <padraic.brady@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor;

use RoRdb\Humbug\PhpScoper\PhpParser\Node\FullyQualifiedFactory;
use RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor\Resolver\IdentifierResolver;
use RoRdb\Humbug\PhpScoper\PhpParser\UnexpectedParsingScenario;
use RoRdb\Humbug\PhpScoper\Symbol\EnrichedReflector;
use RoRdb\Humbug\PhpScoper\Symbol\SymbolsRegistry;
use RoRdb\PhpParser\Node;
use RoRdb\PhpParser\Node\Identifier;
use RoRdb\PhpParser\Node\Name\FullyQualified;
use RoRdb\PhpParser\Node\Stmt\Class_;
use RoRdb\PhpParser\Node\Stmt\Interface_;
use RoRdb\PhpParser\NodeVisitorAbstract;
/**
 * Records the user classes which are exposed.
 *
 * @private
 */
final class ClassIdentifierRecorder extends NodeVisitorAbstract
{
    private string $prefix;
    private IdentifierResolver $identifierResolver;
    private SymbolsRegistry $symbolsRegistry;
    private EnrichedReflector $enrichedReflector;
    public function __construct(string $prefix, IdentifierResolver $identifierResolver, SymbolsRegistry $symbolsRegistry, EnrichedReflector $enrichedReflector)
    {
        $this->prefix = $prefix;
        $this->identifierResolver = $identifierResolver;
        $this->symbolsRegistry = $symbolsRegistry;
        $this->enrichedReflector = $enrichedReflector;
    }
    public function enterNode(Node $node) : Node
    {
        if (!$node instanceof Identifier || !ParentNodeAppender::hasParent($node)) {
            return $node;
        }
        $parent = ParentNodeAppender::getParent($node);
        $isClassOrInterface = $parent instanceof Class_ || $parent instanceof Interface_;
        if (!$isClassOrInterface) {
            return $node;
        }
        if (null === $parent->name) {
            throw UnexpectedParsingScenario::create();
        }
        $resolvedName = $this->identifierResolver->resolveIdentifier($node);
        if (!$resolvedName instanceof FullyQualified) {
            throw UnexpectedParsingScenario::create();
        }
        if ($this->enrichedReflector->isExposedClass((string) $resolvedName)) {
            $this->symbolsRegistry->recordClass($resolvedName, FullyQualifiedFactory::concat($this->prefix, $resolvedName));
        }
        return $node;
    }
}
