<?php

namespace RoRdb;

// Don't redefine the functions if included multiple times.
if (!\function_exists('RoRdb\\GuzzleHttp\\Promise\\promise_for')) {
    require __DIR__ . '/functions.php';
}
