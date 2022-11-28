<?php

namespace App\Controllers;

use App\Audit;

class ReasonsController extends Controller
{
    /**
     * This method is triggered by the route "/reasons"
     */
    public function index()
    {
        $reasons = $this->app->db()->all('reasons');

        return $this->app->view('reasons/index', ['reasons' => $reasons]);
    }
}