<?php

namespace Hexarchium\CodeDomain\Model\ClassStructure\Events;

use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;

class ClassStructureAdded
{
    /**
     * @var \DateTime
     */
    private $dateTime;

    /**
     * @var ClassStructure
     */
    private $classStructure;

    public function __construct(\DateTime $dateTime, ClassStructure $classStructure)
    {
        $this->dateTime = $dateTime;
        $this->classStructure = $classStructure;
    }
}
