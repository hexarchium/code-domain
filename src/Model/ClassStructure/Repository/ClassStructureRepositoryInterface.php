<?php
/**
 * Copyright
 */
namespace Hexarchium\CodeDomain\Model\ClassStructure\Repository;

use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;

interface ClassStructureRepositoryInterface
{
    public function add(ClassStructure $classStructure);

    public function getById(ClassStructureId $classStructureId): ClassStructure;
}
