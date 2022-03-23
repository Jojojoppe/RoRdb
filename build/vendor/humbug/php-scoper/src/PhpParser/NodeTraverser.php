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
namespace RoRdb\Humbug\PhpScoper\PhpParser;

use RoRdb\Humbug\PhpScoper\PhpParser\Node\NameFactory;
use RoRdb\PhpParser\Node;
use RoRdb\PhpParser\Node\Stmt;
use RoRdb\PhpParser\Node\Stmt\Declare_;
use RoRdb\PhpParser\Node\Stmt\GroupUse;
use RoRdb\PhpParser\Node\Stmt\InlineHTML;
use RoRdb\PhpParser\Node\Stmt\Namespace_;
use RoRdb\PhpParser\Node\Stmt\Use_;
use RoRdb\PhpParser\Node\Stmt\UseUse;
use RoRdb\PhpParser\NodeTraverserInterface;
use RoRdb\PhpParser\NodeVisitor;
use function array_map;
use function array_slice;
use function array_splice;
use function array_values;
use function count;
use function current;
/**
 * @private
 */
final class NodeTraverser implements NodeTraverserInterface
{
    private NodeTraverserInterface $decoratedTraverser;
    public function __construct(NodeTraverserInterface $decoratedTraverser)
    {
        $this->decoratedTraverser = $decoratedTraverser;
    }
    public function addVisitor(NodeVisitor $visitor) : void
    {
        $this->decoratedTraverser->addVisitor($visitor);
    }
    public function removeVisitor(NodeVisitor $visitor) : void
    {
        $this->decoratedTraverser->removeVisitor($visitor);
    }
    public function traverse(array $nodes) : array
    {
        $nodes = $this->wrapInNamespace($nodes);
        $nodes = $this->replaceGroupUseStatements($nodes);
        return $this->decoratedTraverser->traverse($nodes);
    }
    /**
     * Wrap the statements in a namespace when necessary:.
     *
     * ```php
     * #!/usr/bin/env php
     * <?php declare(strict_types=1);
     *
     * // A small comment
     *
     * if (\true) {
     *  echo "yo";
     * }
     * ```
     *
     * Will result in:
     *
     * ```php
     * #!/usr/bin/env php
     * <?php declare(strict_types=1);
     *
     * // A small comment
     *
     * namespace {
     *     if (\true) {
     *      echo "yo";
     *     }
     * }
     * ```
     *
     * @param Node[] $nodes
     *
     * @return Node[]
     */
    private function wrapInNamespace(array $nodes) : array
    {
        if ([] === $nodes) {
            return $nodes;
        }
        $nodes = array_values($nodes);
        $firstRealStatementIndex = 0;
        $realStatements = [];
        foreach ($nodes as $i => $node) {
            if ($node instanceof Declare_ || $node instanceof InlineHTML) {
                continue;
            }
            $firstRealStatementIndex = $i;
            /** @var Stmt[] $realStatements */
            $realStatements = array_slice($nodes, $i);
            break;
        }
        $firstRealStatement = current($realStatements);
        if (\false !== $firstRealStatement && !$firstRealStatement instanceof Namespace_) {
            $wrappedStatements = new Namespace_(null, $realStatements);
            array_splice($nodes, $firstRealStatementIndex, count($realStatements), [$wrappedStatements]);
        }
        return $nodes;
    }
    /**
     * @param Node[] $nodes
     *
     * @return Node[]
     */
    private function replaceGroupUseStatements(array $nodes) : array
    {
        foreach ($nodes as $node) {
            if (!$node instanceof Namespace_) {
                continue;
            }
            $statements = $node->stmts;
            $newStatements = [];
            foreach ($statements as $statement) {
                if ($statement instanceof GroupUse) {
                    $uses_ = $this->createUses_($statement);
                    array_splice($newStatements, count($newStatements), 0, $uses_);
                } else {
                    $newStatements[] = $statement;
                }
            }
            $node->stmts = $newStatements;
        }
        return $nodes;
    }
    /**
     * @param GroupUse $node
     *
     * @return Use_[]
     */
    private function createUses_(GroupUse $node) : array
    {
        return array_map(static function (UseUse $use) use($node) : Use_ {
            $newUse = new UseUse(NameFactory::concat($node->prefix, $use->name, $use->name->getAttributes()), $use->alias, $use->type, $use->getAttributes());
            return new Use_([$newUse], $node->type, $node->getAttributes());
        }, $node->uses);
    }
}
