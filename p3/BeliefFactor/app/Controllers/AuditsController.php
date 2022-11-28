<?php

namespace App\Controllers;

use App\Audit;

class AuditsController extends Controller
{
    /**
     * This method is triggered by the route "/audits"
     */
    public function index()
    {
        $audits = $this->app->db()->all('audits');

        return $this->app->view('audits/index', ['audits' => $audits]);
    }
}