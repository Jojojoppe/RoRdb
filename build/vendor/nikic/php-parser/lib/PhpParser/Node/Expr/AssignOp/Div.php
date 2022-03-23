<?php

declare (strict_types=1);
namespace RoRdb\PhpParser\Node\Expr\AssignOp;

use RoRdb\PhpParser\Node\Expr\AssignOp;
class Div extends AssignOp
{
    public function getType() : string
    {
        return 'Expr_AssignOp_Div';
    }
}
