<?php

namespace WebTheory\UnitUtils\Partials;

use PHPUnit\Framework\Assert;
use WebTheory\UnitUtils\Concerns\FormattedDataSetsTrait;

trait HasExpectedTypes
{
    use FormattedDataSetsTrait;

    /**
     * @test
     * @dataProvider expectedTypesData
     */
    public function it_is_implementation_of_expected_types(string $type)
    {
        Assert::assertInstanceOf($type, $this->sut);
    }

    public function expectedTypesData(): array
    {
        return $this->defineExpectedTypesData(
            fn (string $type) => $this->data('type', $type)->get()
        );
    }

    /**
     * @param callable(string $interface) $ds
     *
     * @return array<string, array>
     */
    abstract protected function defineExpectedTypesData(callable $ds): array;
}
