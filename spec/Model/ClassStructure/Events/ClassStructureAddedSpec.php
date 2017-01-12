<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Event\DomainEventInterface;
use Hexarchium\CodeDomain\Model\ClassStructure\Events\ClassStructureAdded;
use PhpSpec\ObjectBehavior;

class ClassStructureAddedSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(new \DateTime());
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructureAdded::class);
        $this->shouldBeAnInstanceOf(DomainEventInterface::class);
    }
}
