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
        $rankings_id = $this->app->param('id');

        if (is_null($rankings_id)) {
            $this->app->redirect('/rankings');
        }

        $rankings = $this->app->db()->findById('rankings', $rankings_id);

        if (empty($rankings)) {
            return $this->app->redirect('/rankings/missing');
        }

        return $this->app->view('rankings/show', [
            'rankings' => $rankings
        ]);
    }

    public function missing()
    {
        return $this->app->view('rankings/missing', []);
    }
}