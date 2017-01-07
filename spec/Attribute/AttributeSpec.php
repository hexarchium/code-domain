<?php

namespace spec\Hexarchium\CodeDomain\Attribute;

use Hexarchium\CodeDomain\Attribute\Attribute;
use Hexarchium\CodeDomain\Attribute\Type;
use PhpSpec\ObjectBehavior;

class AttributeSpec extends ObjectBehavior
{
    function let(Type $type)
    {
        $this->beConstructedWith($type);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Attribute::class);
    }

    function it_should_have_type()
    {
        $this->getType()->shouldBeAnInstanceOf(Type::class);
    }
}
