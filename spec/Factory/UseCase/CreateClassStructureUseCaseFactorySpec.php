<?php

namespace spec\Hexarchium\CodeDomain\Factory\UseCase;

use Hexarchium\CodeDomain\Factory\UseCase\CreateClassStructureUseCaseFactory;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;
use PhpSpec\ObjectBehavior;

class CreateClassStructureUseCaseFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CreateClassStructureUseCaseFactory::class);
    }

    function it_should_factory_usecase(ClassStructureRepositoryInterface $classStructureRepository)
    {
        $this->factory($classStructureRepository)->shouldBeAnInstanceOf(UseCase::class);
    }
}
