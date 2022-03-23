<?php

/*
 * This file is part of the Fidry\Console package.
 *
 * (c) Théo FIDRY <theo.fidry@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare (strict_types=1);
namespace RoRdb\Fidry\Console\Test;

use RoRdb\Fidry\Console\Application\Application as ConsoleApplication;
use RoRdb\Fidry\Console\Application\SymfonyApplication;
use RoRdb\Fidry\Console\DisplayNormalizer;
use RoRdb\Symfony\Component\Console\Tester\ApplicationTester;
/**
 * @psalm-suppress PropertyNotSetInConstructor
 */
final class AppTester extends ApplicationTester
{
    public static function fromConsoleApp(ConsoleApplication $application) : self
    {
        return new self(new SymfonyApplication($application));
    }
    /**
     * @param null|callable(string):string $extraNormalization
     */
    public function getNormalizedDisplay(?callable $extraNormalization = null) : string
    {
        $extraNormalization = $extraNormalization ?? static fn(string $display): string => $display;
        $display = DisplayNormalizer::removeTrailingSpaces($this->getDisplay());
        return $extraNormalization($display);
    }
}
