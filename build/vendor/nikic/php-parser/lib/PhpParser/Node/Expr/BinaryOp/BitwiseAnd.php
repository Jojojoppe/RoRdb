<?php

declare (strict_types=1);
namespace RoRdb\PhpParser\Node\Expr\BinaryOp;

use RoRdb\PhpParser\Node\Expr\BinaryOp;
class BitwiseAnd extends BinaryOp
{
    public function getOperatorSigil() : string
    {
        return '&';
    }
    public function getType() : string
    {
        return 'Expr_BinaryOp_BitwiseAnd';
    }
}
