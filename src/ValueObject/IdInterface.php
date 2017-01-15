<?php
/**
 * Copyright
 */
namespace Hexarchium\CodeDomain\ValueObject;

interface IdInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    public function getNameSpace(): string;
}
