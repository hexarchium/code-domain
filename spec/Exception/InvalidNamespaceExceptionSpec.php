<?php

namespace spec\Hexarchium\CodeDomain\Exception;

use Hexarchium\CodeDomain\Exception\CodeDomainException;
use Hexarchium\CodeDomain\Exception\InvalidNamespaceException;
use PhpSpec\ObjectBehavior;

class InvalidNamespaceExceptionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(InvalidNamespaceException::class);
        $this->shouldBeAnInstanceOf(CodeDomainException::class);
    }
}
