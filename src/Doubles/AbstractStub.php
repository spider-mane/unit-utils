<?php

namespace WebTheory\UnitUtils\Doubles;

use WebTheory\UnitUtils\Concerns\FakeGeneratorTrait;

abstract class AbstractStub
{
    use FakeGeneratorTrait;

    public function __construct()
    {
        $this->initFaker();
    }
}
