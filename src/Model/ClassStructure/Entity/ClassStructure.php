<?php

namespace Hexarchium\CodeDomain\Model\ClassStructure\Entity;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;

class ClassStructure
{
    /**
     * @var ClassStructureId
     */
    private $classStructureId;

    public function __construct(ClassStructureId $classStructureId)
    {
        $this->classStructureId = $classStructureId;
    }

    public function getId(): ClassStructureId
    {
        return $this->classStructureId;
    }
}
