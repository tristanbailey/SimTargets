<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

require 'app/start.php';
/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
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
     * @Given there is no :arg1
     */
    public function thereIsNo($arg1)
    {
        if (isset($this->$arg1))
        {
            return false;
        }
    }

    /**
     * @When I creat a new :arg1 object
     */
    public function iCreatANewObject($arg1)
    {
        $this->$arg1 = new \Codecourse\User\User;
        if (!isset($this->$arg1) && !is_object($this->$arg1))
        {
            return false;
        }
        
    }

    /**
     * @Then I should see data from the database
     */
    public function iShouldSeeDataFromTheDatabase()
    {
//$userX = \Codecourse\User\User::where('id', '=', 1)->get();
//$userX = new \Codecourse\User\User;
//$userX = $userX->where('id', '=', 1)->get();
//foreach ($userX as $user) {
        //echo $user->username;
        //echo $user->password . PHP_EOL;
//}

//$users = new \Codecourse\User\User;
//$flights = $users->select('username', 'password')->get();
//foreach ($flights as $user) {
        //echo $user->username . ' ';
        //echo $user->first_name . ' ';
        //echo $user->password . PHP_EOL;
//}
        //$users = \Codecourse\User\User::where('id', '=', 1)->get();
        $users = $this->User->where('id', '=', 1)->firstOrFail();
        //$users = $this->User->find(1);
//var_dump(get_class_methods($users));
//var_dump($this->User->find(11));
//var_dump($users);
        if (isset($users) && $users->count() < 1) 
        {
        throw new Exception;
        }
    }

    public function iShouldCreateUser()
    {
        $flightTest = $this->User->create(['username' => 'Flight 10', 'active' => 0]);
    }

    /**
     * @Given I am on :arg1
     */
    public function iAmOn($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then I should GET :arg1 and see JSON:
     */
    public function iShouldGetAndSeeJson($arg1, PyStringNode $string)
    {
        throw new PendingException();
    }


}
