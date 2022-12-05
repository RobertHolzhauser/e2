<?php

namespace App\Controllers;

use App\Ranking;

class RankingsController extends Controller
{
    /**
     * This method is triggered by the route "/rankings"
     */
    public function index()
    {
        $rankings = $this->app->db()->all('rankings');

        return $this->app->view('rankings/index', ['rankings' => $rankings]);
    }

    /**
     * This method is triggered by the route "/ranking?id=123"
     */
    public function show()
    {
        $rankings = $this->app->db()->all('rankings');  /*TODO  */

        return $this->app->view('rankings/index', ['rankings' => $rankings]);
    }
}