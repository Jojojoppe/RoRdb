<?php

declare (strict_types=1);
namespace RoRdb\Humbug\PhpScoper\PhpParser\Printer;

use RoRdb\PhpParser\Node;
interface Printer
{
    /**
     * @param Node[] $newStmts
     * @param Node[] $oldStmts
     * @param array<mixed> $oldTokens
     */
    public function print(array $newStmts, array $oldStmts, array $oldTokens) : string;
}
