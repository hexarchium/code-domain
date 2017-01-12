<?php
/**
 * Copyright
 */
namespace Helpers;

use Helpers\Repository\ClassStructureRepository;
use Hexarchium\CodeDomain\Factory\UseCase\CreateClassStructureUseCaseFactory;
use Hexarchium\CodeDomain\Model\ClassStructure\Repository\ClassStructureRepositoryInterface;
use Hexarchium\CodeDomain\UseCase\CreateClassStructure\UseCase;
use Interop\Container\ContainerInterface;

class Container extends \ArrayObject implements ContainerInterface
{
    static public function factory()
    {
        $container = new self();

        $container->initializeFactory();
        $container->initializeRepository();
        $container->initializeUseCase();

        return $container;
    }

    public function initializeFactory()
    {
        $this->offsetSet(
            CreateClassStructureUseCaseFactory::class,
            new CreateClassStructureUseCaseFactory()
        );
    }

    private function initializeRepository()
    {
        $this->offsetSet(
            ClassStructureRepositoryInterface::class,
            new ClassStructureRepository()
        );
    }

    private function initializeUseCase()
    {
        $this->offsetSet(
            UseCase::class,
            $this->get(CreateClassStructureUseCaseFactory::class)->factory(
                $this->get(ClassStructureRepositoryInterface::class)
            )
        );
    }

    public function get($id)
    {
        if (!$this->has($id)) {
            throw new \Exception(sprintf("Given service '%s' don't exist", $id));
        }

        return $this->offsetGet($id);
    }

    public function has($id)
    {
        return $this->offsetExists($id);
    }
}
