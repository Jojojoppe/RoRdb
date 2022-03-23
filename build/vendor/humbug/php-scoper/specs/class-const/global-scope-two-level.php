<?php

declare (strict_types=1);
namespace RoRdb;

/*
 * This file is part of the humbug/php-scoper package.
 *
 * Copyright (c) 2017 Théo FIDRY <theo.fidry@gmail.com>,
 *                    Pádraic Brady <padraic.brady@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
return ['meta' => [
    'title' => 'Class constant call of a namespaced class in the global scope',
    // Default values. If not specified will be the one used
    'prefix' => 'Humbug',
    'expose-global-constants' => \false,
    'expose-global-classes' => \false,
    'expose-global-functions' => \false,
    'expose-namespaces' => [],
    'expose-constants' => [],
    'expose-classes' => [],
    'expose-functions' => [],
    'exclude-namespaces' => [],
    'exclude-constants' => [],
    'exclude-classes' => [],
    'exclude-functions' => [],
    'expected-recorded-classes' => [],
    'expected-recorded-functions' => [],
], 'Constant call on a namespaced class' => <<<'PHP'
<?php

namespace PHPUnit {
    class Command {}
}

namespace {
    PHPUnit\Command::MAIN_CONST;
}
----
<?php

namespace Humbug\PHPUnit;

class Command
{
}
namespace Humbug;

PHPUnit\Command::MAIN_CONST;

PHP
, 'FQ constant call on a namespaced class' => <<<'PHP'
<?php

namespace PHPUnit {
    class Command {}
}

namespace {
    \PHPUnit\Command::MAIN_CONST;
}
----
<?php

namespace Humbug\PHPUnit;

class Command
{
}
namespace Humbug;

\Humbug\PHPUnit\Command::MAIN_CONST;

PHP
, 'Constant call on an exposed namespaced class' => ['expose-classes' => ['RoRdb\\PHPUnit\\Command'], 'expected-recorded-classes' => [['RoRdb\\PHPUnit\\Command', 'RoRdb\\Humbug\\PHPUnit\\Command']], 'payload' => <<<'PHP'
<?php

namespace PHPUnit {
    class Command {}
}

namespace {
    PHPUnit\Command::MAIN_CONST;
}
----
<?php

namespace Humbug\PHPUnit;

class Command
{
}
\class_alias('Humbug\\PHPUnit\\Command', 'PHPUnit\\Command', \false);
namespace Humbug;

\Humbug\PHPUnit\Command::MAIN_CONST;

PHP
], 'FQ constant call on an exposed namespaced class' => ['expose-classes' => ['RoRdb\\PHPUnit\\Command'], 'expected-recorded-classes' => [['RoRdb\\PHPUnit\\Command', 'RoRdb\\Humbug\\PHPUnit\\Command']], 'payload' => <<<'PHP'
<?php

namespace PHPUnit {
    class Command {}
}

namespace {
    \PHPUnit\Command::MAIN_CONST;
}
----
<?php

namespace Humbug\PHPUnit;

class Command
{
}
\class_alias('Humbug\\PHPUnit\\Command', 'PHPUnit\\Command', \false);
namespace Humbug;

\Humbug\PHPUnit\Command::MAIN_CONST;

PHP
]];
