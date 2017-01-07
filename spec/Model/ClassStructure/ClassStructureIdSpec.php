<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use PhpSpec\ObjectBehavior;

class ClassStructureIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructureId::class);
    }
}
