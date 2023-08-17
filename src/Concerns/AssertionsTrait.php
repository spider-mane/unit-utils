<?php

namespace WebTheory\UnitUtils\Concerns;

use PHPUnit\Framework\Assert;

trait AssertionsTrait
{
    protected static function assertArrayIsMap(array $array, string $message = ''): void
    {
        Assert::assertFalse(
            array_is_list($array),
            $message ?: 'Failed asserting that array is a map.'
        );
    }

    protected static function assertArrayIsList(array $array, string $message = ''): void
    {
        Assert::assertTrue(
            array_is_list($array),
            $message ?: 'Failed asserting that array is a list.'
        );
    }
}
