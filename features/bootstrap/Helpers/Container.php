<?php
/**
 * Copyright
 */
namespace Helpers;

use Interop\Container\ContainerInterface;

class Container extends \ArrayObject implements ContainerInterface
{
    static public function factory()
    {
        $container = new self();

        return $container;
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
