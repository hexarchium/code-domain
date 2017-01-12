<?php
use Hexarchium\CodeDomain\Model\ClassStructure\ClassStructureId;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\Command;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;

/**
 * Copyright
 */
class ClassStructureFeatureContext implements \Behat\Behat\Context\Context
{
    /**
     * @var UseCase
     */
    private $useCase;

    /**
     * @var ClassStructureRepositoryInterface
     */
    private $classStructureRepository;

    /**
     * ClassStructureFeatureContext constructor.
     *
     * @param UseCase $useCase
     * @param ClassStructureRepositoryInterface $classStructureRepository
     */
    public function __construct(UseCase $useCase, ClassStructureRepositoryInterface $classStructureRepository)
    {
        $this->useCase = $useCase;
        $this->classStructureRepository = $classStructureRepository;
    }


    /**
     * @When I create class :arg1
     * @param $arg1
     */
    public function iCreateClass($arg1)
    {
        $command = new Command(new ClassStructureId($arg1));
        $this->useCase->handle($command);
    }

    /**
     * @Then I should see new created class :arg1
     * @param $arg1
     */
    public function iShouldSeeNewCreatedClass($arg1)
    {
        $this->classStructureRepository->getById(new ClassStructureId($arg1));
    }
}
