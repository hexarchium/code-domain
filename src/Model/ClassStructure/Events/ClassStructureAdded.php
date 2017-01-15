<?php

namespace Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Event\AbstractDomainEvent;
use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;

class ClassStructureAdded extends AbstractDomainEvent
{

    public function __construct(\DateTime $dateTime, ClassStructure $classStructure)
    {
        parent::__construct($dateTime);
        $this->setParam('id', $classStructure->getId()->getId());
    }
}
