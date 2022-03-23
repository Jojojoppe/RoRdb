<?php declare(strict_types=1);

// scoper.inc.php

use Isolated\Symfony\Component\Finder\Finder;

return [
    'prefix' => 'RoRdb',
    'finders' => [
        Finder::create()
            ->files()
            ->ignoreVCS(true)
            ->notName('/LICENSE|.*\\.md|.*\\.MD|.*\\.dist|Makefile|composer\\.json|composer\\.lock/')
            ->exclude([
                'doc',
                'test',
                'test_old',
                'tests',
                'Tests',
                'vendor-bin',
            ])
            ->in('vendor'),
        Finder::create()->append([
            'vendor/bin/php-scoper',
            'composer.json',
        ])
    ],
    'patchers' => [
        static function (string $filePath, string $prefix, string $content): string {

            // Guzzle version check in google/*
            if(substr_count($filePath, '/google')>0){
                $cnt = 0;
                $content = str_replace(
                    "\\defined('\\\\GuzzleHttp\\\\ClientInterface::",
                    "\\defined('\\\\".$prefix."\\\\GuzzleHttp\\\\ClientInterface::",
                    $content, $cnt);
                if($cnt>0){
                    echo "\r + Patched $filePath for GuzzleHttp\\\\ClientInterface::\r\n";
                }
                $content = str_replace(
                    "\\defined('GuzzleHttp\\\\ClientInterface::",
                    "\\defined('".$prefix."\\\\GuzzleHttp\\\\ClientInterface::",
                    $content, $cnt);
                if($cnt>0){
                    echo "\r + Patched $filePath for GuzzleHttp\\\\ClientInterface::\r\n";
                }
            }

            return $content;
        },
    ],
];