<?php

declare (strict_types=1);
namespace RoRdb\PhpParser\Node\Stmt;

use RoRdb\PhpParser\Node;
/** Nop/empty statement (;). */
class Nop extends Node\Stmt
{
    public function getSubNodeNames() : array
    {
        return [];
    }
    public function getType() : string
    {
        return 'Stmt_Nop';
    }
}
