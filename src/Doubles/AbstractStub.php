<?php

namespace WebTheory\UnitUtils\Doubles;

use WebTheory\UnitUtils\Concerns\FakerTrait;

abstract class AbstractStub
{
    use FakerTrait;

    public function __construct()
    {
        $this->initFaker();
    }
}
