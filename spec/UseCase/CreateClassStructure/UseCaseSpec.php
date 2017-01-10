<?php

namespace spec\Hexarchium\CodeDomain\UseCase\CreateClassStructure;

use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\Command;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UseCaseSpec extends ObjectBehavior
{
    function let(ClassStructureRepositoryInterface $structureRepository)
    {
        $this->beConstructedWith($structureRepository);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(UseCase::class);
    }

    function it_should_handle_command(ClassStructureRepositoryInterface $structureRepository, Command $command)
    {
        /** @var ClassStructure $classStructure */
        $classStructure = Argument::type(ClassStructure::class);
        $structureRepository->add($classStructure)->shouldBeCalled();

        $command->getClassStructureId()->shouldBeCalled();

        $this->handle($command)->shouldReturn(null);
    }
}
