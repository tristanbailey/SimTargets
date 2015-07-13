<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Assert\Assertion;
// use Assert\AssertionFailedException;

// \Assert\that($value)->notEmpty()->integer();
// \Assert\that($value)->nullOr()->string()->startsWith("Foo");
// \Assert\that($values)->all()->float();

// Assertion::integer($value);
// Assertion::digit($value);
// Assertion::integerish($value);
// Assertion::float($value);
// Assertion::range($value, $minValue, $maxValue);
// Assertion::boolean($value);
// Assertion::scalar($value);
// Assertion::notEmpty($value);
// Assertion::noContent($value);
// Assertion::notNull($value);
// Assertion::string($value);
// Assertion::regex($value, $regex);
// Assertion::length($value, $length);
// Assertion::minLength($value, $length);
// Assertion::maxLength($value, $length);
// Assertion::betweenLength($value, $minLength, $maxLength);
// Assertion::startsWith($value, $needle);
// Assertion::endsWith($value, $needle);
// Assertion::isArray($value);
// Assertion::contains($value, $needle);
// Assertion::choice($value, $choices);
// Assertion::inArray($value, $choices);
// Assertion::numeric($value);
// Assertion::keyExists($value, $key);
// Assertion::notEmptyKey($value, $key);
// Assertion::notBlank($value);
// Assertion::isInstanceOf($value, $className);
// Assertion::notIsInstanceOf($value, $className);
// Assertion::classExists($value);
// Assertion::subclassOf($value, $className);
// Assertion::directory($value);
// Assertion::file($value);
// Assertion::readable($value);
// Assertion::writeable($value);
// Assertion::email($value);
// Assertion::url($value);
// Assertion::alnum($value);
// Assertion::true($value);
// Assertion::false($value);
// Assertion::min($value, $min);
// Assertion::max($value, $max);
// Assertion::eq($actual, $expected);
// Assertion::same($actual, $expected);
// Assertion::implementsInterface($value, $interfaceName);
// Assertion::isJsonString($value);
// Assertion::uuid($value);
// Assertion::choicesNotEmpty($value, $choices);
// Assertion::isObject($value);
// Assertion::methodExists($value, $object);

//try {
    //Assertion::integer($value, "The pressure of gas is measured in integers.");
//} catch(AssertionFailedException $e) {
     error handling
    //$e->getValue(); // the value that caused the failure
    //$e->getConstraints(); // the additional constraints of the assertion.
//}

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
