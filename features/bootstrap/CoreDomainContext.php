<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use PHPUnit_Framework_Assert as assert;

/**
 * Defines application features from the specific context.
 */
class CoreDomainContext implements Context, SnippetAcceptingContext
{
    private $folderPath;
    private $plugin;

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
        $this->plugin = new \Triplecheck\Phpcs\Plugin();
        $this->plugin->run();
    }

    /**
     * @Then I should see that the score for this extension should be scored :arg1
     */
    public function iShouldSeeThatTheScoreForThisExtensionShouldBeScored($arg1)
    {
        throw new PendingException();
    }
}
