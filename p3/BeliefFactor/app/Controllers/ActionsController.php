<?php

namespace App\Controllers;

use App\Action;

class ActionsController extends Controller
{
    /**
     * This method is triggered by the route "/actions"
     */
    public function index()
    {
        $actions = $this->app->db()->all('actions');

        return $this->app->view('actions/index', ['actions' => $actions]);
    }

    /**
     * This method is triggered by the route "/action?id=123"
     */
    public function show()
    {
        $actions = $this->app->db()->all('actions');
        /** TODO */

        return $this->app->view('actions/index', ['actions' => $actions]);
    }
}