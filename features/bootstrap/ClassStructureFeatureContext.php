<?php
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Copyright
 */
class ClassStructureFeatureContext implements \Behat\Behat\Context\Context
{
    /**
     * @When I create class :arg1
     * @param $arg1
     */
    public function iCreateClass($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see new created class :arg1
     * @param $arg1
     */
    public function iShouldSeeNewCreatedClass($arg1)
    {
        throw new PendingException();
    }
}
