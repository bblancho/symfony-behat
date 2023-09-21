<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Behat\Gherkin\Node\PyStringNode;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Tester\Exception\PendingException;

/**
 * Defines application features from the specific context.
 */
class AuthContext extends MinkContext implements Context
{

    /**
      * @Given I login as :username with password :password
      */
    public function iLoginAsWithPassword($username, $password) {
        $this->visit("/login");
        $this->fillField("email", $username);
        $this->fillField("password", $password);
        $this->pressButton("Login");
    }
}
