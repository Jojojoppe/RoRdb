<?php

declare (strict_types=1);
namespace RoRdb\PhpParser\Node\Stmt;

use RoRdb\PhpParser\Node;
abstract class TraitUseAdaptation extends Node\Stmt
{
    /** @var Node\Name|null Trait name */
    public $trait;
    /** @var Node\Identifier Method name */
    public $method;
}
