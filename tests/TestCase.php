<?php

namespace DarrinDeal\DeadDrop\Tests;

use DarrinDeal\DeadDrop\DeadDropServiceProvider;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            DeadDropServiceProvider::class,
        ];
    }
}
