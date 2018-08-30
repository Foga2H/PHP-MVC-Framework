<?php

/**
 * Front Controller
 */

/**
 * Composer Autoload
 */
require_once dirname(__DIR__) . '/vendor/autoload.php';

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