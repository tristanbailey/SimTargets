<?php
//App trial
//uses twig, elequent
// runs with session
// breaks views and routes up
// has a config and a
//
use Slim\Slim;
use Slim\Views\Twig;
use Slim\Views\TwigExtension;

use Noodlehaus\Config;

use Codecourse\User\User;
use Codecourse\Helpers\Hash;

session_cache_limiter(false);
session_start();

ini_set('display_errors', 'On');
ini_set('display_errors', 1);
error_reporting(E_ALL);

// set up base
define('INC_ROOT', dirname(__DIR__));

// requires -> autoload all
require INC_ROOT . '/vendor/autoload.php';

// app up
$app = new Slim([
    'mode' => trim(file_get_contents(INC_ROOT . '/mode.php')),
//    'mode' => 'development',
    'view' => new Twig(),
    'templates.path' => INC_ROOT . '/app/views'
]);

$app->configureMode($app->config('mode'), function() use ($app) {
    $app->config = Config::load(INC_ROOT . "/app/config/{$app->mode}.php");
});

//var_dump($app->config->get('db.driver'));

require INC_ROOT . '/app/database.php';

//$user = new \Codecourse\User\User;

$app->container->set('user', function() {
    return new User;
});

$app->container->singleton('hash', function() use ($app) {
    return new Hash($app->config);
});
//var_dump($app->user);
//echo $app->hash->passwordCheck('dave',$app->hash->password('dave'));


// routes up
//
require INC_ROOT . '/app/routes.php';

$view = $app->view();

$view->parserOptions = [
    'debug' => $app->config->get('twig.debug')
    ];

$view->parserExtensions = [
    new TwigExtension
    ];

