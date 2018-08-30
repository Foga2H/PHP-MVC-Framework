<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

/**
 * Posts Controller
 * @package App\Controllers
 */

class Posts extends Controller
{
    /**
     * Show the index page
     *
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     *
     * @return void
     */
    public function indexAction()
    {
        View::renderTemplate('posts.index');
    }

    /**
     * Show the add new page
     *
     * @return void
     */
    public function addNewAction()
    {
        echo 'Hello from the addNew action in the Posts controller!';
    }

    /**
     * Show the edit page
     *
     * @return void
     */
    public function editAction()
    {
        echo 'Hello from the edit action in the Posts controller!';
        echo '<p>Query string parameters: <pre>' .
            htmlspecialchars(print_r($this->route_params, true)) . '</pre></p>';
    }
}