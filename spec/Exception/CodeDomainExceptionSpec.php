<?php

namespace spec\Hexarchium\CodeDomain\Exception;

use Hexarchium\CodeDomain\Exception\CodeDomainException;
use PhpSpec\ObjectBehavior;

class CodeDomainExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(CodeDomainException::class);
        $this->shouldBeAnInstanceOf(\Exception::class);
    }
}
