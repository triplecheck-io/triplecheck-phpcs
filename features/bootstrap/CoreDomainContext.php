<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class CoreDomainContext implements Context, SnippetAcceptingContext
{
    private $folderPath;

    /**
     * @Given I have a module located in :folderPath
     *
     */
    public function iHaveAModuleLocatedIn($folderPath)
    {
        $this->folderPath = $folderPath;
    }

    /**
     * @When I run triple-check
     */
    public function iRunTripleCheck()
    {
        throw new PendingException();
    }

    /**
     * @Then I should see that the score for this extension should be scored :arg1
     */
    public function iShouldSeeThatTheScoreForThisExtensionShouldBeScored($arg1)
    {
        throw new PendingException();
    }
}
