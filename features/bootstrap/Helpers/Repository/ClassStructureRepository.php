<?php
/**
 * Copyright
 */
namespace Helpers\Repository;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;

class ClassStructureRepository extends \ArrayObject implements ClassStructureRepositoryInterface
{
    public function add(ClassStructure $classStructure)
    {
        $this->offsetSet(
            $classStructure->getId()->getId(),
            $classStructure
        );
    }

    public function getById(ClassStructureId $classStructureId): ClassStructure
    {
        return $this->offsetGet($classStructureId->getId());
    }
}