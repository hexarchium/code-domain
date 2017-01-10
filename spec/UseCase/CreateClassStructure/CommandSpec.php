<?php

namespace spec\Hexarchium\CodeDomain\UseCase\CreateClassStructure;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\Command;
use PhpSpec\ObjectBehavior;

class CommandSpec extends ObjectBehavior
{
    function let(ClassStructureId $classStructureId)
    {
        $this->beConstructedWith($classStructureId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
    }

    function it_should_have_structure_class_id()
    {
        $this->getClassStructureId()->shouldBeAnInstanceOf(ClassStructureId::class);
    }

}
