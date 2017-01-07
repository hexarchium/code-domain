<?php

namespace spec\Hexarchium\CodeDomain\UseCase\CreateClassStructure;

use Hexarchium\CodeDomain\UseCase\CreateClassStructure\Command;
use PhpSpec\ObjectBehavior;

class CommandSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Command::class);
    }
}
