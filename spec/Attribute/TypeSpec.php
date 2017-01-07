<?php

namespace spec\Hexarchium\CodeDomain\Attribute;

use Hexarchium\CodeDomain\Attribute\Type;
use PhpSpec\ObjectBehavior;

class TypeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Type::class);
    }
}
