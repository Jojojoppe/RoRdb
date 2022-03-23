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
namespace RoRdb\Humbug\PhpScoper;

use RoRdb\Humbug\PhpScoper\Configuration\ConfigurationFactory;
use RoRdb\Humbug\PhpScoper\Configuration\RegexChecker;
use RoRdb\Humbug\PhpScoper\Configuration\SymbolsConfigurationFactory;
use RoRdb\Humbug\PhpScoper\PhpParser\Printer\Printer;
use RoRdb\Humbug\PhpScoper\PhpParser\Printer\StandardPrinter;
use RoRdb\Humbug\PhpScoper\Scoper\ScoperFactory;
use RoRdb\Humbug\PhpScoper\Symbol\EnrichedReflectorFactory;
use RoRdb\Humbug\PhpScoper\Symbol\Reflector;
use RoRdb\PhpParser\Lexer;
use RoRdb\PhpParser\Parser;
use RoRdb\PhpParser\ParserFactory;
use RoRdb\PhpParser\PrettyPrinter\Standard;
use RoRdb\Symfony\Component\Filesystem\Filesystem;
final class Container
{
    private Filesystem $filesystem;
    private ConfigurationFactory $configFactory;
    private Parser $parser;
    private Reflector $reflector;
    private ScoperFactory $scoperFactory;
    private EnrichedReflectorFactory $enrichedReflectorFactory;
    private Printer $printer;
    private Lexer $lexer;
    public function getFileSystem() : Filesystem
    {
        if (!isset($this->filesystem)) {
            $this->filesystem = new Filesystem();
        }
        return $this->filesystem;
    }
    public function getConfigurationFactory() : ConfigurationFactory
    {
        if (!isset($this->configFactory)) {
            $this->configFactory = new ConfigurationFactory($this->getFileSystem(), new SymbolsConfigurationFactory(new RegexChecker()));
        }
        return $this->configFactory;
    }
    public function getScoperFactory() : ScoperFactory
    {
        if (!isset($this->scoperFactory)) {
            $this->scoperFactory = new ScoperFactory($this->getParser(), $this->getEnrichedReflectorFactory(), $this->getPrinter(), $this->getLexer());
        }
        return $this->scoperFactory;
    }
    public function getParser() : Parser
    {
        if (!isset($this->parser)) {
            $this->parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7, $this->getLexer());
        }
        return $this->parser;
    }
    public function getReflector() : Reflector
    {
        if (!isset($this->reflector)) {
            $this->reflector = Reflector::createWithPhpStormStubs();
        }
        return $this->reflector;
    }
    public function getEnrichedReflectorFactory() : EnrichedReflectorFactory
    {
        if (!isset($this->enrichedReflectorFactory)) {
            $this->enrichedReflectorFactory = new EnrichedReflectorFactory($this->getReflector());
        }
        return $this->enrichedReflectorFactory;
    }
    public function getPrinter() : Printer
    {
        if (!isset($this->printer)) {
            $this->printer = new StandardPrinter(new Standard());
        }
        return $this->printer;
    }
    public function getLexer() : Lexer
    {
        if (!isset($this->lexer)) {
            $this->lexer = new Lexer();
        }
        return $this->lexer;
    }
}
