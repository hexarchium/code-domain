<?php

namespace spec\Hexarchium\CodeDomain\UseCase\CreateClassStructure;

use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;
use PhpSpec\ObjectBehavior;

class UseCaseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UseCase::class);
    }
}
