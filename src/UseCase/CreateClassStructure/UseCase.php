<?php

namespace Hexarchium\CodeDomain\UseCase\CreateClassStructure;


use Hexarchium\CodeDomain\Model\ClassStructure\Entity\ClassStructure;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;

class UseCase
{

    /**
     * @var ClassStructureRepositoryInterface
     */
    private $classStructureRepository;

    public function __construct(ClassStructureRepositoryInterface $classStructureRepository)
    {
        $this->classStructureRepository = $classStructureRepository;
    }

    public function handle(Command $command)
    {
        $classStructure = new ClassStructure(
            $command->getClassStructureId()
        );

        $this->classStructureRepository->add($classStructure);
    }
}
