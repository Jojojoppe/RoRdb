<?php

declare (strict_types=1);
namespace RoRdb\Humbug\PhpScoper\PhpParser\Printer;

use RoRdb\PhpParser\PrettyPrinterAbstract;
final class StandardPrinter implements Printer
{
    private PrettyPrinterAbstract $decoratedPrinter;
    public function __construct(PrettyPrinterAbstract $decoratedPrinter)
    {
        $this->decoratedPrinter = $decoratedPrinter;
    }
    public function print(array $newStmts, array $oldStmts, array $oldTokens) : string
    {
        return $this->decoratedPrinter->prettyPrintFile($newStmts) . "\n";
    }
}
