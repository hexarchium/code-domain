<?php

namespace spec\Hexarchium\CodeDomain\Factory\UseCase;

use Hexarchium\CodeDomain\Factory\UseCase\CreateClassStructureUseCaseFactory;
use PhpSpec\ObjectBehavior;

class CreateClassStructureUseCaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateClassStructureUseCaseFactory::class);
    }
}
