<?php

namespace Hexarchium\CodeDomain\Attribute;

class Attribute
{
    /** @var  Type */
    private $type;

    /**
     * Attribute constructor.
     *
     * @param Type $type
     */
    public function __construct(Type $type)
    {
        $this->type = $type;
    }

    public function getType(): Type
    {
        return $this->type;
    }
}
