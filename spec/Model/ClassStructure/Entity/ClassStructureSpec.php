<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure\Entity;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use PhpSpec\ObjectBehavior;

class ClassStructureSpec extends ObjectBehavior
{
    function let(ClassStructureId $classStructureId)
    {
        $this->beConstructedWith($classStructureId);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructure::class);
    }

    function it_should_have_id()
    {
        $this->getId()->shouldBeAnInstanceOf(ClassStructureId::class);
    }
}
