<?php

namespace spec\Hexarchium\CodeDomain\Exception;

use Hexarchium\CodeDomain\Exception\CodeDomain;
use PhpSpec\ObjectBehavior;

class CodeDomainSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CodeDomain::class);
        $this->shouldBeAnInstanceOf(\Exception::class);
    }
}
