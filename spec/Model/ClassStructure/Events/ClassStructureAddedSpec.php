<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Event\DomainEventInterface;
use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use Hexarchium\CodeDomain\Model\ClassStructure\Events\ClassStructureAdded;
use PhpSpec\ObjectBehavior;

class ClassStructureAddedSpec extends ObjectBehavior
{
    function let(ClassStructure $classStructure)
    {
        $classStructure->getId()->willReturn(
            new ClassStructureId('Class/Id')
        );
        $this->beConstructedWith(new \DateTime(), $classStructure);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructureAdded::class);
        $this->shouldBeAnInstanceOf(DomainEventInterface::class);
    }

    function it_should_have_parameter_class_id()
    {
        $this->getPayload()->shouldHaveKey('id');
    }


}
