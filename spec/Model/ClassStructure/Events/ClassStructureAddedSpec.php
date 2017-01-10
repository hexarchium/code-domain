<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use Hexarchium\CodeDomain\Model\ClassStructure\Events\ClassStructureAdded;
use PhpSpec\ObjectBehavior;

class ClassStructureAddedSpec extends ObjectBehavior
{
    function let(ClassStructure $classStructure)
    {
        $this->beConstructedWith(new \DateTime(), $classStructure);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructureAdded::class);
    }
}
