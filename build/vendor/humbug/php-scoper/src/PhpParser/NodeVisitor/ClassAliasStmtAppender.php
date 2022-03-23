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

use RoRdb\Humbug\PhpScoper\PhpParser\Node\ClassAliasFuncCall;
use RoRdb\Humbug\PhpScoper\PhpParser\Node\FullyQualifiedFactory;
use RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor\Resolver\IdentifierResolver;
use RoRdb\Humbug\PhpScoper\PhpParser\UnexpectedParsingScenario;
use RoRdb\Humbug\PhpScoper\Symbol\EnrichedReflector;
use RoRdb\PhpParser\Node;
use RoRdb\PhpParser\Node\Name\FullyQualified;
use RoRdb\PhpParser\Node\Stmt;
use RoRdb\PhpParser\Node\Stmt\Class_;
use RoRdb\PhpParser\Node\Stmt\Expression;
use RoRdb\PhpParser\Node\Stmt\Interface_;
use RoRdb\PhpParser\Node\Stmt\Namespace_;
use RoRdb\PhpParser\NodeVisitorAbstract;
use function array_reduce;
/**
 * Appends a `class_alias` statement to the exposed classes.
 *
 * ```
 * namespace A;
 *
 * class Foo
 * {
 * }
 * ```
 *
 * =>
 *
 * ```
 * namespace Humbug\A;
 *
 * class Foo
 * {
 * }
 *
 * class_alias('Humbug\A\Foo', 'A\Foo', false);
 * ```
 *
 * @internal
 */
final class ClassAliasStmtAppender extends NodeVisitorAbstract
{
    private string $prefix;
    private EnrichedReflector $enrichedReflector;
    private IdentifierResolver $identifierResolver;
    public function __construct(string $prefix, EnrichedReflector $enrichedReflector, IdentifierResolver $identifierResolver)
    {
        $this->prefix = $prefix;
        $this->enrichedReflector = $enrichedReflector;
        $this->identifierResolver = $identifierResolver;
    }
    public function afterTraverse(array $nodes) : array
    {
        $newNodes = [];
        foreach ($nodes as $node) {
            if ($node instanceof Namespace_) {
                $node = $this->appendToNamespaceStmt($node);
            }
            $newNodes[] = $node;
        }
        return $newNodes;
    }
    private function appendToNamespaceStmt(Namespace_ $namespace) : Namespace_
    {
        $namespace->stmts = array_reduce($namespace->stmts, fn(array $stmts, Stmt $stmt) => $this->createNamespaceStmts($stmts, $stmt), []);
        return $namespace;
    }
    /**
     * @param Stmt[] $stmts
     *
     * @return Stmt[]
     */
    private function createNamespaceStmts(array $stmts, Stmt $stmt) : array
    {
        $stmts[] = $stmt;
        $isClassOrInterface = $stmt instanceof Class_ || $stmt instanceof Interface_;
        if (!$isClassOrInterface) {
            return $stmts;
        }
        $name = $stmt->name;
        if (null === $name) {
            throw UnexpectedParsingScenario::create();
        }
        $resolvedName = $this->identifierResolver->resolveIdentifier($name);
        if ($resolvedName instanceof FullyQualified && $this->enrichedReflector->isExposedClass((string) $resolvedName)) {
            $stmts[] = self::createAliasStmt($resolvedName, $stmt, $this->prefix);
        }
        return $stmts;
    }
    private static function createAliasStmt(FullyQualified $originalName, Node $stmt, string $prefix) : Expression
    {
        $call = new ClassAliasFuncCall(FullyQualifiedFactory::concat($prefix, $originalName), $originalName, $stmt->getAttributes());
        $expression = new Expression($call, $stmt->getAttributes());
        ParentNodeAppender::setParent($call, $expression);
        return $expression;
    }
}
