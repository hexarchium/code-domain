<?php

namespace spec\Hexarchium\CodeDomain\Exception;

use Hexarchium\CodeDomain\Exception\CodeDomainException;
use Hexarchium\CodeDomain\Exception\InvalidClassNameException;
use PhpSpec\ObjectBehavior;

class InvalidClassNameExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(InvalidClassNameException::class);
        $this->shouldBeAnInstanceOf(CodeDomainException::class);
    }
}
