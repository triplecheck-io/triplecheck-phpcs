<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class CliContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given I have a file located in the root of the project called :fileName with the following content:
     */
    public function iHaveAFileLocatedInTheRootOfTheProjectCalledWithTheFollowingContent($fileName, PyStringNode $string)
    {
        file_put_contents($fileName, $string);
    }

    /**
     * @When I run triple-check against :arg1
     */
    public function iRunTripleCheckAgainst($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should see that my modules score is :arg1
     */
    public function iShouldSeeThatMyModulesScoreIs($arg1)
    {
        throw new PendingException();
    }
}
