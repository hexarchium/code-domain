<?php

namespace spec\Hexarchium\CodeDomain\Model\ClassStructure;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\ValueObject\IdInterface;
use PhpSpec\ObjectBehavior;

class ClassStructureIdSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('ClassStructureId', 'Test\\');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ClassStructureId::class);
        $this->shouldBeAnInstanceOf(IdInterface::class);
    }
}
