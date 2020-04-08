<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

if (!defined('LARAVEL_START')) {
    define('LARAVEL_START', microtime(true));
}

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
}
