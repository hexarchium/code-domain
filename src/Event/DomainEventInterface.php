<?php
/**
 * Copyright
 */
namespace Hexarchium\CodeDomain\Event;


interface DomainEventInterface
{
    /**
     * @return \DateTime
     */
    public function whenHappened();

    /**
     * @return array
     */
    public function getPayload();
}
