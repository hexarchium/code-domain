<?php

namespace Hexarchium\CodeDomain\UseCase\CreateClassStructure;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;

class Command
{
    /**
     * @var ClassStructureId
     */
    private $classStructureId;

    public function __construct(ClassStructureId $classStructureId)
    {
        $this->classStructureId = $classStructureId;
    }

    public function getClassStructureId(): ClassStructureId
    {
        return $this->classStructureId;
    }
}
