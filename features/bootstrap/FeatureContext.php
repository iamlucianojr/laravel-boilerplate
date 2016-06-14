<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
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
     * @Then The page title should be :title
     */
    public function thePageTitleShouldBe($title)
    {
        $this->assertPageContainsText($title);
    }

    /**
     * @Then I should have an account
     */
    public function iShouldHaveAnAccount()
    {
        throw new PendingException();
    }

    /**
     * @Given I am on Register page
     */
    public function iAmOnRegisterPage()
    {
        $this->visit('/register');
    }

    /**
     * @Then I fill name with :name
     */
    public function iFillNameWith($name)
    {
        $this->fillField('name', $name);
        $this->showLastResponse();
    }

    /**
     * @Then I fill email with :arg1
     */
    public function iFillEmailWith($arg1)
    {
        throw new PendingException();
    }
}
