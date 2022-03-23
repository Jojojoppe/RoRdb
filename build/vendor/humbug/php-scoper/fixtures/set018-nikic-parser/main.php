<?php

declare (strict_types=1);
namespace RoRdb;

use RoRdb\PhpParser\NodeDumper;
use RoRdb\PhpParser\ParserFactory;
require_once __DIR__ . '/vendor/autoload.php';
$code = <<<'CODE'
<?php

namespace RoRdb;

function test(int|float $foo)
{
    \var_dump($foo);
}
CODE;
$parser = (new ParserFactory())->create(ParserFactory::PREFER_PHP7);
$ast = $parser->parse($code);
$dumper = new NodeDumper();
echo $dumper->dump($ast) . "\n";
