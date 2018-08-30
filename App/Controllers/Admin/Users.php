<?php

namespace App\Controllers\Admin;

use Core\Controller;

class Users extends Controller
{
    /**
     * Before filter.
     *
     * @return void
     */
    protected function before()
    {
        // Make sure an admin user is logged in for example
    }

    /**
     * Show the index page
     *
     * @return void
     */
    public function indexAction()
    {
        echo 'User admin index';
    }
}