<?php

namespace Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Event\AbstractDomainEvent;

class ClassStructureAdded extends AbstractDomainEvent
{

    public function __construct(\DateTime $dateTime)
    {
        parent::__construct($dateTime);
    }
}
