<?php

declare(strict_types=1);

namespace WebTheory\UnitUtils\Concerns;

use WebTheory\UnitUtils\LIb\FormattedDataSet;

trait FormattedDataSetsTrait
{
    protected function ds(): FormattedDataSet
    {
        return new FormattedDataSet();
    }

    protected function data(string $key, string $val): FormattedDataSet
    {
        return $this->ds()->set($key, $val);
    }

    protected function dataSet(string $key, string $val): string
    {
        return $this->data($key, $val)->get();
    }
}
