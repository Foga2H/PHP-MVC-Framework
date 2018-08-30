<?php

namespace App\Controllers;

use Core\Controller;
use Core\View;

/**
 * Home Controller
 * @package App\Controllers
 */
class Home extends Controller
{
    /**
     * Before filter.
     *
     * @return void
     */
    protected function before()
    {
        //echo "{before}";
    }

    /**
     * After filter.
     *
     * @return void
     */
    protected function after()
    {
        //echo "{after}";
    }

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
        View::renderTemplate('home.index');
    }
}