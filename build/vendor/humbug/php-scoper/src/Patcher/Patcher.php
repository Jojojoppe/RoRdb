<?php

declare (strict_types=1);
namespace RoRdb\Humbug\PhpScoper\Patcher;

interface Patcher
{
    public function __invoke(string $filePath, string $prefix, string $contents) : string;
}
