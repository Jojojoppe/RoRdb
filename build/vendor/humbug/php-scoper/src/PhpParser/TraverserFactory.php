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

use RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor\NamespaceStmt\NamespaceStmtCollection;
use RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor\Resolver\IdentifierResolver;
use RoRdb\Humbug\PhpScoper\PhpParser\NodeVisitor\UseStmt\UseStmtCollection;
use RoRdb\Humbug\PhpScoper\Scoper\PhpScoper;
use RoRdb\Humbug\PhpScoper\Symbol\EnrichedReflector;
use RoRdb\Humbug\PhpScoper\Symbol\SymbolsRegistry;
use RoRdb\PhpParser\NodeTraverser as PhpParserNodeTraverser;
use RoRdb\PhpParser\NodeTraverserInterface;
use RoRdb\PhpParser\NodeVisitor as PhpParserNodeVisitor;
use RoRdb\PhpParser\NodeVisitor\NameResolver;
/**
 * @private
 */
class TraverserFactory
{
    private EnrichedReflector $reflector;
    private string $prefix;
    private SymbolsRegistry $symbolsRegistry;
    public function __construct(EnrichedReflector $reflector, string $prefix, SymbolsRegistry $symbolsRegistry)
    {
        $this->reflector = $reflector;
        $this->prefix = $prefix;
        $this->symbolsRegistry = $symbolsRegistry;
    }
    public function create(PhpScoper $scoper) : NodeTraverserInterface
    {
        return self::createTraverser(self::createNodeVisitors($this->prefix, $this->reflector, $scoper, $this->symbolsRegistry));
    }
    /**
     * @param PhpParserNodeVisitor[] $nodeVisitors
     */
    private static function createTraverser(array $nodeVisitors) : NodeTraverserInterface
    {
        $traverser = new NodeTraverser(new PhpParserNodeTraverser());
        foreach ($nodeVisitors as $nodeVisitor) {
            $traverser->addVisitor($nodeVisitor);
        }
        return $traverser;
    }
    /**
     * @return PhpParserNodeVisitor[]
     */
    private static function createNodeVisitors(string $prefix, EnrichedReflector $reflector, PhpScoper $scoper, SymbolsRegistry $symbolsRegistry) : array
    {
        $namespaceStatements = new NamespaceStmtCollection();
        $useStatements = new UseStmtCollection();
        $nameResolver = new NameResolver(null, ['preserveOriginalNames' => \true]);
        $identifierResolver = new IdentifierResolver($nameResolver);
        $stringNodePrefixer = new StringNodePrefixer($scoper);
        return [$nameResolver, new NodeVisitor\ParentNodeAppender(), new NodeVisitor\IdentifierNameAppender($identifierResolver), new NodeVisitor\NamespaceStmt\NamespaceStmtPrefixer($prefix, $reflector, $namespaceStatements), new NodeVisitor\UseStmt\UseStmtCollector($namespaceStatements, $useStatements), new NodeVisitor\UseStmt\UseStmtPrefixer($prefix, $reflector), new NodeVisitor\NamespaceStmt\FunctionIdentifierRecorder($prefix, $identifierResolver, $symbolsRegistry, $reflector), new NodeVisitor\ClassIdentifierRecorder($prefix, $identifierResolver, $symbolsRegistry, $reflector), new NodeVisitor\NameStmtPrefixer($prefix, $namespaceStatements, $useStatements, $reflector), new NodeVisitor\StringScalarPrefixer($prefix, $reflector), new NodeVisitor\NewdocPrefixer($stringNodePrefixer), new NodeVisitor\EvalPrefixer($stringNodePrefixer), new NodeVisitor\ClassAliasStmtAppender($prefix, $reflector, $identifierResolver), new NodeVisitor\MultiConstStmtReplacer(), new NodeVisitor\ConstStmtReplacer($identifierResolver, $reflector)];
    }
}
