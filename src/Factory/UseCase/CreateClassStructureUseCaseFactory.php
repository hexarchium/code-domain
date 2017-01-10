<?php

namespace Hexarchium\CodeDomain\Factory\UseCase;

use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;

class CreateClassStructureUseCaseFactory
{
    public function factory(ClassStructureRepositoryInterface $classStructureRepository)
    {
        return new UseCase($classStructureRepository);
    }
}
