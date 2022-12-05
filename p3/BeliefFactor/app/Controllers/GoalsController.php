<?php

namespace App\Controllers;

use App\Goal;

class GoalsController extends Controller
{
    /**
     * This method is triggered by the route "/goals"
     */
    public function index()
    {
        $goals = $this->app->db()->all('goals');

        return $this->app->view('goals/index', ['goals' => $goals]);
    }

    /**
     * This method is triggered by the route "/goals/new"
     */
    public function new()
    {
        return $this->app->view('goals/new', []);
    }

      /**
     * This method is triggered by the route "/goals/save"
     */
    public function save()
    {
        return $this->app->view('goals/new', []);
    }
}