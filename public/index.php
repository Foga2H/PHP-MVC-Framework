<?php

/**
 * Front Controller
 */

/**
 * Composer Autoload
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

/**
 * Error and exception handling
 */
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/**
 * Routing
 */
require '../Core/Router.php';

$router = new \Core\Router();

// Add the routes
$router->add('', ['controller' => 'Home', 'action' => 'index']);
$router->add('posts', ['controller' => 'Posts', 'action' => 'index']);
$router->add('{controller}/{action}');
$router->add('{controller}/{id:\d+}/{action}');
$router->add('admin/{controller}/{action}', ['namespace' => 'Admin']);

$router->dispatch($_SERVER['QUERY_STRING']);