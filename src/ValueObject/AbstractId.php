<?php
/**
 * Copyright
 */
namespace Hexarchium\CodeDomain\ValueObject;


use Hexarchium\CodeDomain\Exception\InvalidClassNameException;
use Hexarchium\CodeDomain\Exception\InvalidNamespaceException;

abstract class AbstractId implements IdInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $namespace;

    /**
     * Id constructor.
     *
     * @param string $name
     * @param string $namespace
     * @throws InvalidClassNameException
     * @throws InvalidNamespaceException
     */
    public function __construct(string $name, string $namespace)
    {
        if (!preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/', $name)) {
            throw new InvalidClassNameException(sprintf('Invalid class name "%s"', $name));
        }
        $this->name = $name;

        if (!preg_match("/(\w+\\\\{1,3})+/", $namespace)) {
            throw new InvalidNamespaceException(sprintf("Invalid namespace '%s'", $namespace));
        }
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }
}
