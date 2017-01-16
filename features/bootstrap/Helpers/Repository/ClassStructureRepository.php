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
        $classStructureId = $classStructure->getId();
        $key = $classStructureId->getNamespace() . $classStructureId->getName();
        $this->offsetSet(
            $key,
            $classStructure
        );
    }

    public function getById(ClassStructureId $classStructureId): ClassStructure
    {
        $key = $classStructureId->getNamespace() . $classStructureId->getName();

        return $this->offsetGet($key);
    }
}
